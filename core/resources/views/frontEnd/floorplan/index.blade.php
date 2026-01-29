{{-- core/resources/views/frontEnd/floorplan/index.blade.php --}}

@extends('frontEnd.layouts.master')

@section('content')
    <style>
        .floorplan-wrapper {
            min-height: auto;
        }

        /* Tooltip */
        .fp-tooltip {
            position: fixed;
            background: #111;
            color: #fff;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 12px;
            /* pointer-events: none; */
            pointer-events: auto;
            opacity: 0;
            transform: translateY(6px);
            transition: all .15s ease;
            z-index: 9999;
            text-align: center;
        }

        .fp-tooltip.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Hover effect on available booths */
        .booth.available:hover rect:first-child {
            filter: brightness(1.1);
        }
    </style>

    <!-- PAGE TITLE -->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">Floor Plan</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Floor Plan</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="floorplan-page py-16">
        <div class="container-fluid mx-auto px-4">
            <div class="floorplan-wrapper relative overflow-x-auto mt-5">
                {{-- Kuwait Floorplan Layout --}}
                @include('frontEnd.floorplan.layouts.finsphere-kuwait')
            </div>

            {{-- Booth Modal --}}
            @include('frontEnd.floorplan.modals.booth-modal')
        </div>
    </section>

    <div id="fpTooltip" class="fp-tooltip"></div>

    {{-- TOOLTIP + BOOTH CLICK LOGIC --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const tooltip = document.getElementById("fpTooltip");
            const booths = document.querySelectorAll(".booth");

            booths.forEach(booth => {

                booth.addEventListener("mousemove", e => {

                    const isReserved = booth.dataset.reserved === "1";

                    // 🔒 RESERVED TOOLTIP
                    if (isReserved) {
                        tooltip.innerHTML = `
                    <div style="text-align:center">
                        <strong>${booth.dataset.title.replace(/\n/g,' ')}</strong>
                        <div style="margin:8px 0">
                            <a href="${booth.dataset.companyUrl}" target="_blank">
                                <img src="${booth.dataset.companyLogo}"
                                     style="height:55px;background:#fff;padding:6px;border-radius:6px;object-fit:contain;">
                            </a>
                        </div>
                        <small>${booth.dataset.companyName}</small>
                    </div>
                `;

                        tooltip.style.left = e.clientX + 15 + "px";
                        tooltip.style.top = e.clientY + 15 + "px";
                        tooltip.classList.add("show");

                        lucide.createIcons(); // render lock icon
                        return;
                    }

                    // ✅ NORMAL TOOLTIP
                    let html = `<strong>${booth.dataset.title}</strong><br>`;

                    if (booth.dataset.no) {
                        html += `Booth No: ${booth.dataset.no}<br>`;
                    }

                    if (booth.dataset.size) {
                        html += `Size: ${booth.dataset.size}`;
                    }

                    tooltip.innerHTML = html;
                    tooltip.style.left = e.clientX + 15 + "px";
                    tooltip.style.top = e.clientY + 15 + "px";
                    tooltip.classList.add("show");
                });

                let tooltipLocked = false;

                booth.addEventListener("mouseenter", () => {
                    tooltipLocked = true;
                });

                booth.addEventListener("mouseleave", () => {
                    tooltipLocked = false;
                    setTimeout(() => {
                        if (!tooltipLocked) tooltip.classList.remove("show");
                    }, 150);
                });

                tooltip.addEventListener("mouseenter", () => {
                    tooltipLocked = true;
                });

                tooltip.addEventListener("mouseleave", () => {
                    tooltipLocked = false;
                    tooltip.classList.remove("show");
                });


                // ❌ Disable modal for reserved
                booth.addEventListener("click", () => {
                    if (booth.dataset.reserved === "1") return;
                    if (booth.dataset.status !== "available") return;

                    openBoothModal({
                        no: booth.dataset.no,
                        title: booth.dataset.title,
                        size: booth.dataset.size,
                        price: parseFloat(booth.dataset.price) || 0,
                        isSponsorship: booth.dataset.isSponsorship === "1"
                    });
                });
            });
        });
    </script>


    {{-- MODAL STEP LOGIC --}}
    <script>
        function openBoothModal(data) {
            const modal = document.getElementById("boothModal");
            modal.style.display = "flex";

            // Update summary card
            const summaryTitle = data.isSponsorship ? "Sponsorship Summary" : "Booth Summary";
            document.querySelector(".fpk-summary-card .fpk-card-title").innerText = summaryTitle;

            const rowBoothNo = document.getElementById("rowBoothNo");
            const rowSize = document.getElementById("rowSize");

            const labelTitle = document.getElementById("labelTitle");
            const labelSize = document.getElementById("labelSize");

            const cleanTitle = (data.title || "").replace(/\n/g, " ").replace(/\s+/g, " ").trim();
            document.getElementById("sTitle").innerText = cleanTitle || "-";

            document.getElementById("sSize").innerText = data.size || "-";

            if (data.isSponsorship) {
                // Hide booth number
                rowBoothNo.style.display = "none";

                // Change labels
                labelTitle.innerText = "Sponsorship Title:";
                labelSize.innerText = "Sponsorship Size:";
            } else {
                // Show booth number
                rowBoothNo.style.display = "flex";
                document.getElementById("sBoothNo").innerText = data.no || "-";

                // Reset labels
                labelTitle.innerText = "Booth Title:";
                labelSize.innerText = "Booth Size:";
            }

            // Update amount dynamically
            const amountEl = document.querySelectorAll(".fpk-summary-card .fpk-summary-row strong")[3]; // Booth Amount
            const totalEl = document.querySelector(".fpk-summary-card .fpk-total strong");
            const price = data.price.toFixed(2);

            amountEl.innerText = `$ ${price}`;
            totalEl.innerText = `$ ${price}`;

            // Step 1 visible
            document.getElementById("fpk-step-1").style.display = "block";
            document.getElementById("modalStep2").style.display = "none";

            document.getElementById("stepIndicator1").classList.add("active");
            document.getElementById("stepIndicator2").classList.remove("active");

            // Store current price for step 2 payments
            modal.dataset.currentPrice = price;
        }

        function closeBoothModal() {
            document.getElementById("boothModal").style.display = "none";
        }

        function goStep2() {
            const modal = document.getElementById("boothModal");
            const price = modal.dataset.currentPrice || "0.00";

            document.getElementById("fpk-step-1").style.display = "none";
            document.getElementById("modalStep2").style.display = "block";

            document.getElementById("stepIndicator1").classList.remove("active");
            document.getElementById("stepIndicator2").classList.add("active");

            // Pre-fill payment details with current price
            document.querySelectorAll(".fpk-pay-box strong").forEach(el => el.innerText = `$ ${price}`);
            document.querySelectorAll(".fpk-right input.fpk-input").forEach(input => input.value = `$ ${price}`);
        }

        function goStep1() {
            document.getElementById("fpk-step-1").style.display = "block";
            document.getElementById("modalStep2").style.display = "none";

            document.getElementById("stepIndicator1").classList.add("active");
            document.getElementById("stepIndicator2").classList.remove("active");
        }

        // Payment selection
        function fpkSelectPayment(el) {
            document.querySelectorAll('.fpk-pay-card').forEach(c => c.classList.remove('active'));
            el.classList.add('active');

            const type = el.dataset.pay;
            const box = document.getElementById('fpkPaymentDetails');
            const modal = document.getElementById("boothModal");
            const price = modal.dataset.currentPrice || "0.00";

            if (type === 'nowpayments' || type === 'stripe') {
                box.innerHTML = `
            <div class="fpk-pay-box">
                <h6>${type.charAt(0).toUpperCase() + type.slice(1)}</h6>
                <p>Amount: <strong>$ ${price}</strong></p>
                <button class="fpk-btn-primary w-full">Pay Now</button>
            </div>`;
            }

            if (type === 'usdt' || type === 'bank') {
                box.innerHTML = `
                <div class="fpk-pay-split">
                    <div class="fpk-left">
                        ${type === 'usdt' ? `
                        <h6>USDT Payment</h6>
                        <div class="fpk-qr-grid">
                            <div><img src="{{ asset('assets/frontend/img/payments/usdt-qr-1.png') }}"><p>TRON (TRC20)</p></div>
                            <div><img src="{{ asset('assets/frontend/img/payments/usdt-qr-2.png') }}"><p>ETHEREUM (ERC20)</p></div>
                        </div>` : `
                        <h6>Bank Deposit</h6>
                        <p><strong>Account Holder:</strong> PROFINSUMMIT</p>
                        <p><strong>Account Number:</strong> 8123734309</p>
                        <p><strong>IFSC:</strong> IDIB000R088</p>
                        <p><strong>CBS Code:</strong> 02342</p>
                        <p><strong>Bank Address:<br></strong> 
                            RAJNI KHAND F3, WARD NUMBER 1,
                            RAJNI KHAND, SHARDA NAGAR,
                            RAEBARELI ROAD, LUCKNOW – 226002
                            </p>`
                        }
                    </div>
                    <div class="fpk-right">
                        ${type === 'usdt' ? `
                        <label>Select Network</label>
                        <select class="fpk-input">
                            <option>TRON (TRC20)</option>
                            <option>ETHEREUM (ERC20)</option>
                        </select>
                        <label>Amount to be Paid</label>
                        <input class="fpk-input" disabled value="$ ${price}">
                        <label>Upload Payment Proof</label>
                        <input type="file" class="fpk-file">` : `
                        <label>Amount to be Paid</label>
                        <input class="fpk-input" disabled value="$ ${price}">
                        <label>Upload Payment Proof</label>
                        <input type="file" class="fpk-file">`}
                    </div>
                </div>`;
            }
        }
    </script>
@endsection
