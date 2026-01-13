{{-- Book Visitor Modal --}}
<div class="bv-modal-overlay" id="bvModal">
    <div class="bv-modal">
        <span class="bv-close" onclick="bvCloseModal()">&times;</span>

        <h3>Book Visitor</h3>

        <form class="bv-form">
            <div class="bv-field">
                <label>Full Name</label>
                <input type="text" placeholder="Enter your name">
            </div>

            <div class="bv-field">
                <label>Email Address</label>
                <input type="email" placeholder="Enter your email">
            </div>

            <div class="bv-field">
                <label>Phone Number</label>
                <input type="tel" placeholder="+965">
            </div>

            <div class="bv-field">
                <label>Visit Date</label>
                <input type="date">
            </div>

            <div class="bv-actions">
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>
</div>