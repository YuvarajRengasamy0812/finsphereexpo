{{-- core\resources\views\frontEnd\floorplan\layouts\finsphere-kuwait.blade.php --}}
<div class="floorplan-svg-wrapper mx-auto" style="max-width:3000px;">
    <svg viewBox="0 0 3000 1700" class="w-full h-auto border rounded-lg bg-white" xmlns="http://www.w3.org/2000/svg">
        {{-- BACKGROUND --}}
        <rect x="0" y="0" width="3000" height="1700" fill="#F8FAFC" />

        {{-- EXPO BORDER (BACKGROUND LAYER) --}}
        @include('frontEnd.floorplan.components.border')

        {{-- Speaker Hall --}}
        @php
            $speakerX = 2085; // right side
            $speakerY = 60;
            $speakerWidth = 900;
            $speakerHeight = 1480;

            // Stage and Screens dimensions
            $stageWidth = $speakerWidth - 40;
            $stageHeight = 170; // main stage height
            $screenWidthSide = 170;
            $screenWidthMain = 400;
            $screenHeight = 70;

            // Chairs area starts below screens
            $chairsStartY = $speakerY + $screenHeight + 40;

            $userIconWidth = 35;
            $userIconHeight = 35;
            $chairGapX = 15;
            $chairGapY = 22;

            $chairRows = 20;

            $totalCols = 12;
            $groupSize = 3;
            $groupGap = 80; // wider aisle

            // Calculate total width of all chairs + gaps
            $chairsWidth = 0;
            for ($i = 1; $i <= $totalCols; $i++) {
                $chairsWidth += $userIconWidth;
                if ($i < $totalCols) {
                    $chairsWidth += $chairGapX;
                }
                if ($i % $groupSize === 0 && $i < $totalCols) {
                    $chairsWidth += $groupGap;
                }
            }

            // Center inside speaker hall
            $startX = $speakerX + ($speakerWidth - $chairsWidth) / 2;

            $colX = [];
            $currentX = $startX;

            for ($i = 1; $i <= $totalCols; $i++) {
                $colX[] = $currentX;
                $currentX += $userIconWidth + $chairGapX;

                if ($i % $groupSize === 0) {
                    $currentX += $groupGap;
                }
            }

        @endphp

        {{-- Speaker Hall Container --}}
        @include('frontEnd.floorplan.components.booth', [
            'id' => 'SPEAKER-01',
            'title' => '',
            'size' => '',
            'x' => $speakerX,
            'y' => $speakerY,
            'width' => $speakerWidth,
            'height' => $speakerHeight,
            'status' => 'available',
            'category' => 'speakerHall',
            'textSize' => 40,
            'sizeX' => 2550,
            'sizeY' => 460,
        ])

        {{-- MAIN STAGE (back/top) --}}
        <rect x="{{ $speakerX + 20 }}" y="{{ $speakerY }}" width="{{ $stageWidth }}" height="{{ $stageHeight }}"
            rx="12" fill="#6c7a89" />
        <text x="{{ $speakerX + 10 + $speakerWidth / 2 }}" y="{{ $speakerY + $stageHeight / 2 + 25 + 10 }}"
            text-anchor="middle" dominant-baseline="middle" fill="white" font-weight="600" style="font-size:18px;">
            MAIN STAGE
        </text>
        <text x="{{ $speakerX + 10 + $speakerWidth / 2 }}" y="{{ $speakerY + $stageHeight / 2 + 45 + 10 }}"
            text-anchor="middle" dominant-baseline="middle" fill="rgba(255,255,255,0.8)" style="font-size:14px;">
            3 x 14
        </text>

        {{-- SCREENS (in front of stage) --}}
        {{-- Left Side Screen --}}
        <rect x="{{ $speakerX + 20 + 100 - 70 }}" y="{{ $speakerY + $stageHeight - 145 }}"
            width="{{ $screenWidthSide }}" height="{{ $screenHeight }}" rx="8" fill="#2c2f7c" />
        <text x="{{ $speakerX + 20 + 100 - 70 + $screenWidthSide / 2 }}"
            y="{{ $speakerY + $stageHeight - 150 + $screenHeight / 2 }}" text-anchor="middle"
            dominant-baseline="middle" fill="white" font-weight="600" style="font-size:16px;">
            Side Screen
        </text>
        <text x="{{ $speakerX + 20 + 100 - 70 + $screenWidthSide / 2 }}"
            y="{{ $speakerY + $stageHeight + 10 - 150 + $screenHeight / 2 + 12 }}" text-anchor="middle"
            dominant-baseline="middle" fill="rgba(255,255,255,0.7)" font-size="15">
            2 w x 4 h
        </text>

        {{-- Main Screen --}}
        <rect x="{{ $speakerX + 160 + 100 - 10 }}" y="{{ $speakerY + $stageHeight - 145 }}"
            width="{{ $screenWidthMain }}" height="{{ $screenHeight }}" rx="8" fill="#2c2f7c" />
        <text x="{{ $speakerX + 160 + 100 + $screenWidthMain / 2 }}"
            y="{{ $speakerY + $stageHeight - 150 + $screenHeight / 2 }}" text-anchor="middle"
            dominant-baseline="middle" fill="white" font-weight="600" style="font-size:16px;">
            Main Screen
        </text>
        <text x="{{ $speakerX + 160 + 100 + $screenWidthMain / 2 }}"
            y="{{ $speakerY + $stageHeight + 10 - 150 + $screenHeight / 2 + 12 }}" text-anchor="middle"
            dominant-baseline="middle" fill="rgba(255,255,255,0.7)" font-size="15">
            7 w x 4 h
        </text>

        {{-- Right Side Screen --}}
        <rect x="{{ $speakerX + 540 + 140 }}" y="{{ $speakerY + $stageHeight - 145 }}" width="{{ $screenWidthSide }}"
            height="{{ $screenHeight }}" rx="8" fill="#2c2f7c" />
        <text x="{{ $speakerX + 540 + 140 + $screenWidthSide / 2 }}"
            y="{{ $speakerY + $stageHeight - 150 + $screenHeight / 2 }}" text-anchor="middle"
            dominant-baseline="middle" fill="white" font-weight="600" style="font-size:16px;">
            Side Screen
        </text>
        <text x="{{ $speakerX + 540 + 140 + $screenWidthSide / 2 }}"
            y="{{ $speakerY + $stageHeight + 10 - 150 + $screenHeight / 2 + 12 }}" text-anchor="middle"
            dominant-baseline="middle" fill="rgba(255,255,255,0.7)" font-size="15">
            2 w x 4 h
        </text>

        {{-- CHAIRS below screens --}}
        @php
            $currentY = $chairsStartY + $stageHeight;
        @endphp

        @for ($r = 0; $r < $chairRows; $r++)
            @foreach ($colX as $cx)
                <svg x="{{ $cx }}" y="{{ $currentY }}" width="{{ $userIconWidth }}"
                    height="{{ $userIconHeight }}" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21,20a2,2,0,0,1-2,2H5a2,2,0,0,1-2-2,6,6,0,0,1,6-6h6A6,6,0,0,1,21,20Zm-9-8A5,5,0,1,0,7,7,5,5,0,0,0,12,12Z"
                        fill="#4b5563" />
                </svg>
            @endforeach
            @php
                $currentY += $userIconHeight + $chairGapY;
            @endphp
        @endfor
        {{-- SPEAKER HALL LABEL (TOP LAYER) --}}
        <g pointer-events="none">
            <text x="{{ $speakerX + $speakerWidth / 2 }}" y="{{ $speakerY + 90 + 500 }}" text-anchor="middle"
                fill="#fff" font-weight="700" style="font-size:42px;">
                Speaker Hall
            </text>

            <text x="{{ $speakerX + $speakerWidth / 2 }}" y="{{ $speakerY + 135 + 500 }}" text-anchor="middle"
                fill="#fff" font-weight="600" style="font-size:22px;">
                17 x 29
            </text>
        </g>




        {{-- Booth Sponsor --}}
        {{-- Bronze Sponsors 12 --}}
        @php
            $bronzeX = 290; // starting X
            $bronzeY = 105; // Y position
            $bronzeWidth = 130;
            $bronzeHeight = 130;
            $gap = 10; // gap between booths
        @endphp

        @for ($i = 1; $i <= 12; $i++)
            @include('frontEnd.floorplan.components.booth', [
                'id' => 'BRONZE-' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'boothNo' => $i,
                'title' => "Bronze\nSponsor",
                'size' => '3 x 2',
                'x' => $bronzeX + ($i - 1) * ($bronzeWidth + $gap),
                'y' => $bronzeY,
                'width' => $bronzeWidth,
                'height' => $bronzeHeight,
                'status' => 'available',
                'category' => 'bronze',
                'textSize' => 17,
            ])
        @endfor

        {{-- SILVER BOOTHS 8 (2 rows x 4 cols) --}}
        @php
            $silverX = 500; // starting X (aligned with Bronze)
            $silverY = 360; // below Bronze row
            $silverWidth = 170;
            $silverHeight = 170;
            $silverGapX = 5; // horizontal gap
            $silverGapY = 5; // vertical gap
            $silverCols = 4; // 4 booths per row
            $silverStartNo = 13; // continue after Bronze 12
        @endphp

        @for ($i = 0; $i < 8; $i++)
            @php
                $row = floor($i / $silverCols);
                $col = $i % $silverCols;
            @endphp
            @include('frontEnd.floorplan.components.booth', [
                'id' => 'SILVER-' . str_pad($silverStartNo + $i, 2, '0', STR_PAD_LEFT),
                'boothNo' => $silverStartNo + $i,
                'title' => "Silver\nSponsor",
                'size' => '3 x 3',
                'x' => $silverX + $col * ($silverWidth + $silverGapX),
                'y' => $silverY + $row * ($silverHeight + $silverGapY),
                'width' => $silverWidth,
                'height' => $silverHeight,
                'status' => 'available',
                'category' => 'silver',
                'textSize' => 17,
            ])
        @endfor

        {{-- 21-24 GOLD SPONSORS 4 (2 rows x 2 cols) --}}
        @php
            $goldX = 1600; // adjust horizontally (right of Networking Lounge)
            $goldY = 360; // align vertically with Silver/Networking
            $goldWidth = 180; // slightly wider than Silver
            $goldHeight = 170; // same height as Silver
            $goldGapX = 5; // horizontal gap between booths
            $goldGapY = 5; // vertical gap
            $goldCols = 2; // 2 booths per row
            $goldStartNo = 21; // continue after Silver (Silver ended at 20)
        @endphp

        @for ($i = 0; $i < 4; $i++)
            @php
                $row = floor($i / $goldCols);
                $col = $i % $goldCols;
            @endphp
            @include('frontEnd.floorplan.components.booth', [
                'id' => 'GOLD-' . str_pad($goldStartNo + $i, 2, '0', STR_PAD_LEFT),
                'boothNo' => $goldStartNo + $i,
                'title' => "Gold\nSponsor",
                'size' => '3 x 6',
                'x' => $goldX + $col * ($goldWidth + $goldGapX),
                'y' => $goldY + $row * ($goldHeight + $goldGapY),
                'width' => $goldWidth,
                'height' => $goldHeight,
                'status' => 'available',
                'category' => 'gold',
                'textSize' => 17,
            
                // 🔥 reservation data
                // 'reserved' => $goldStartNo + $i == 21,
                // 'companyName' => 'Binance',
                // 'companyLogo' => asset('assets/frontend/img/resources/logo.png'),
                // 'companyUrl' => 'https://binance.com',
            ])
        @endfor


        {{-- 25-28 GOLD SPONSORS 4 (2 rows x 2 cols) --}}
        @php
            $goldX = 90; // adjust horizontally (right of Networking Lounge)
            $goldY = 600; // align vertically with Silver/Networking
            $goldWidth = 180; // slightly wider than Silver
            $goldHeight = 170; // same height as Silver
            $goldGapX = 5; // horizontal gap between booths
            $goldGapY = 5; // vertical gap
            $goldCols = 2; // 2 booths per row
            $goldStartNo = 25; // continue after Silver (Silver ended at 20)
        @endphp

        @for ($i = 0; $i < 4; $i++)
            @php
                $row = floor($i / $goldCols);
                $col = $i % $goldCols;
            @endphp
            @include('frontEnd.floorplan.components.booth', [
                'id' => 'GOLD-' . str_pad($goldStartNo + $i, 2, '0', STR_PAD_LEFT),
                'boothNo' => $goldStartNo + $i,
                'title' => "Gold\nSponsor",
                'size' => '3 x 6',
                'x' => $goldX + $col * ($goldWidth + $goldGapX),
                'y' => $goldY + $row * ($goldHeight + $goldGapY),
                'width' => $goldWidth,
                'height' => $goldHeight,
                'status' => 'available',
                'category' => 'gold',
                'textSize' => 17,
            ])
        @endfor

        @php
            $vipX = 670; // starting X of the whole row
            $vipY1 = 760; // first row Y
            $vipY2 = 1145; // second row Y

            $vipWidth = 300;
            $vipHeight = 275;

            $vipGapX = 40; // 👈 THIS is your master gap control
        @endphp

        @php
            $row1 = [
                ['DIAMOND', 29, "Diamond\nSponsor", 'diamond'],
                ['DIAMOND', 30, "Diamond\nSponsor", 'diamond'],
                ['REGIONAL', 31, "Regional\nSponsor", 'regional'],
                ['ELITE', 32, "Elite\nSponsor", 'elite'],
            ];
        @endphp

        @foreach ($row1 as $i => [$prefix, $no, $title, $cat])
            @include('frontEnd.floorplan.components.booth', [
                'id' => $prefix . '-' . str_pad($no, 2, '0', STR_PAD_LEFT),
                'boothNo' => $no,
                'title' => $title,
                'size' => '4 x 5',
                'x' => $vipX + $i * ($vipWidth + $vipGapX),
                'y' => $vipY1,
                'width' => $vipWidth,
                'height' => $vipHeight,
                'status' => 'available',
                'category' => $cat,
                'textSize' => 20,
            ])
        @endforeach


        {{-- PLATINUM SPONSORS 33-34 (stacked vertically) --}}
        @php
            $platinumX = 90;
            $platinumY = 1050;
            $platinumWidth = 200;
            $platinumHeight = 180;
            $gapY = 10;
            $platinumStartNo = 33;
        @endphp

        @for ($i = 0; $i < 2; $i++)
            @include('frontEnd.floorplan.components.booth', [
                'id' => 'PLATINUM-' . str_pad($platinumStartNo + $i, 2, '0', STR_PAD_LEFT),
                'boothNo' => $platinumStartNo + $i,
                'title' => "Platinum\nSponsor",
                'size' => '3 x 4',
                'x' => $platinumX,
                'y' => $platinumY + $i * ($platinumHeight + $gapY),
                'width' => $platinumWidth,
                'height' => $platinumHeight,
                'status' => 'available',
                'category' => 'platinum',
                'textSize' => 18,
            ])
        @endfor
        {{-- PLATINUM SPONSORS 35-36 (stacked vertically) --}}
        @php
            $platinumX = 390;
            $platinumY = 1050;
            $platinumWidth = 200;
            $platinumHeight = 180;
            $gapY = 10;
            $platinumStartNo = 35;
        @endphp

        @for ($i = 0; $i < 2; $i++)
            @include('frontEnd.floorplan.components.booth', [
                'id' => 'PLATINUM-' . str_pad($platinumStartNo + $i, 2, '0', STR_PAD_LEFT),
                'boothNo' => $platinumStartNo + $i,
                'title' => "Platinum\nSponsor",
                'size' => '3 x 4',
                'x' => $platinumX,
                'y' => $platinumY + $i * ($platinumHeight + $gapY),
                'width' => $platinumWidth,
                'height' => $platinumHeight,
                'status' => 'available',
                'category' => 'platinum',
                'textSize' => 18,
            ])
        @endfor

        @php
            $row2 = [
                ['DIAMOND', 37, "Diamond\nSponsor", 'diamond'],
                ['EXCLUSIVE', 38, "Exclusive\nSponsor", 'exclusive'],
                ['TITLE', 39, "Title\nSponsor", 'title'],
                ['OFFICIAL', 40, "Official\nSponsor", 'official'],
            ];
        @endphp

        @foreach ($row2 as $i => [$prefix, $no, $title, $cat])
            @include('frontEnd.floorplan.components.booth', [
                'id' => $prefix . '-' . str_pad($no, 2, '0', STR_PAD_LEFT),
                'boothNo' => $no,
                'title' => $title,
                'size' => '4 x 5',
                'x' => $vipX + $i * ($vipWidth + $vipGapX),
                'y' => $vipY2,
                'width' => $vipWidth,
                'height' => $vipHeight,
                'status' => 'available',
                'category' => $cat,
                'textSize' => 20,
            ])
        @endforeach



        {{-- Other Sponsor --}}
        {{-- CAFE LOUNGE --}}
        @php
            $cafeX = 90; // left side
            $cafeY = 280;
            $cafeWidth = 130;
            $cafeHeight = 240;
        @endphp

        @include('frontEnd.floorplan.components.booth', [
            'id' => 'CAFE-01',
            'title' => "CAFÉ\nLOUNGE",
            'size' => '3 x 5',
            'x' => $cafeX,
            'y' => $cafeY,
            'width' => $cafeWidth,
            'height' => $cafeHeight,
            'status' => 'available',
            'category' => 'cafe',
            'textSize' => 25,
            'sizeX' => 155,
            'sizeY' => 420,
        ])

        {{-- POLES – Right of Cafe Lounge --}}
        @php
            $poleRadiusOuter = 10;
            $poleRadiusInner = 4;

            // Start just right of cafe lounge
            $poleStartX = $cafeX + $cafeWidth + 40;
            $poleStartY = $cafeY + 40;

            $poleGapX = 40;
            $poleGapY = 40;

            // 3x3 grid (1–9)
            $rows = 3;
            $cols = 3;
        @endphp

        {{-- Poles 1–9 --}}
        @for ($r = 0; $r < $rows; $r++)
            @for ($c = 0; $c < $cols; $c++)
                <g>
                    <circle cx="{{ $poleStartX + $c * $poleGapX }}" cy="{{ $poleStartY + $r * $poleGapY }}"
                        r="{{ $poleRadiusOuter }}" fill="#d4a574" stroke="#8b5a2b" stroke-width="1" />
                    <circle cx="{{ $poleStartX + $c * $poleGapX }}" cy="{{ $poleStartY + $r * $poleGapY }}"
                        r="{{ $poleRadiusInner }}" fill="#8b4513" />
                </g>
            @endfor
        @endfor

        {{-- Pole 10 (right of row 2) --}}
        <g>
            <circle cx="{{ $poleStartX + 3 * $poleGapX + 20 }}" cy="{{ $poleStartY + 0.4 * $poleGapY }}"
                r="{{ $poleRadiusOuter }}" fill="#d4a574" stroke="#8b5a2b" stroke-width="1" />
            <circle cx="{{ $poleStartX + 3 * $poleGapX + 20 }}" cy="{{ $poleStartY + 0.4 * $poleGapY }}"
                r="{{ $poleRadiusInner }}" fill="#8b4513" />
        </g>

        {{-- Pole 11 (right of row 3) --}}
        <g>
            <circle cx="{{ $poleStartX + 3 * $poleGapX + 20 }}" cy="{{ $poleStartY + 1.4 * $poleGapY }}"
                r="{{ $poleRadiusOuter }}" fill="#d4a574" stroke="#8b5a2b" stroke-width="1" />
            <circle cx="{{ $poleStartX + 3 * $poleGapX + 20 }}" cy="{{ $poleStartY + 1.4 * $poleGapY }}"
                r="{{ $poleRadiusInner }}" fill="#8b4513" />
        </g>


        {{-- NETWORKING LOUNGE --}}
        @php
            $networkX = 1280; // left side, under Bronze/Silver
            $networkY = 360; // adjust vertically
            $networkWidth = 250; // slightly wider
            $networkHeight = 347; // slightly taller
        @endphp

        @include('frontEnd.floorplan.components.booth', [
            'id' => 'NETWORK-01',
            'title' => "Networking\nLounge",
            'size' => '7 x 6',
            'x' => $networkX,
            'y' => $networkY,
            'width' => $networkWidth,
            'height' => $networkHeight,
            'status' => 'available',
            'category' => 'network',
            'textSize' => 22,
            // No 'boothNo' => won't display booth number
        ])

        {{-- Labels --}}
        {{-- EXIT --}}
        <rect x="290" y="1470" width="245" height="60" rx="8" fill="#C1C3C4" />
        <text x="415" y="1500" text-anchor="middle" dominant-baseline="middle" fill="white" font-weight="700"
            style="font-size:30px;">
            EXIT
        </text>
        {{-- ENTRANCE --}}
        <rect x="1320" y="1470" width="340" height="60" rx="8" fill="#C1C3C4" />
        <text x="1485" y="1500" text-anchor="middle" dominant-baseline="middle" fill="white" font-weight="700"
            style="font-size:30px;">
            ENTRANCE
        </text>


    </svg>
</div>
