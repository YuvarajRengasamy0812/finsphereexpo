{{-- core\resources\views\frontEnd\floorplan\components\booth.blade.php --}}
@props([
    'id',
    'boothNo',
    'title',
    'size',
    'x',
    'y',
    'width',
    'height',
    'status' => 'available',
    'category' => 'bronze',
    'textSize' => 12,
    'sizeX' => null, // optional X position for size text
    'sizeY' => null, // optional Y position for size text

    // 🔥 NEW
    'reserved' => false,
    'companyName' => null,
    'companyLogo' => null,
    'companyUrl' => null,
])

@php
    // === Colors ===
    $categoryColors = [
        'platinum' => '#4a4843',
        'diamond' => '#6fd3e7',
        'gold' => '#b8860b',
        'silver' => '#c0c0c0',
        'bronze' => '#cd7f32',
        'regional' => '#2ecc71',
        'elite' => '#9b59b6',
        'exclusive' => '#9400d3',
        'title' => '#ff4500',
        'official' => '#ffa500',
        'cafe' => '#a27250',
        'network' => '#ff0000',
        'speakerHall' => '#a855b7',
        'mainStage' => '#6c7a89',
        'screens' => '#2c2f7c',
    ];

    $statusColors = [
        'available' => null,
        'sold' => '#EF4444',
        'locked' => '#9CA3AF',
    ];

    $fillColor = $categoryColors[$category] ?? '#cd7f32';
    if (isset($statusColors[$status]) && $statusColors[$status]) {
        $fillColor = $statusColors[$status];
    }

    // === Booth & Sponsorship Prices ===
    $boothPrices = [
        'platinum' => 8000,
        'diamond' => 10000,
        'gold' => 6500,
        'silver' => 4000,
        'bronze' => 2500,
        'regional' => 15000,
        'elite' => 3500,
        'exclusive' => 15000,
        'title' => 20000,
        'official' => 20000,
    ];

    $sponsorshipPrices = [
        'cafe' => 15000,
        'network' => 10000,
    ];

    $isSponsorship = in_array($category, ['cafe', 'network']);
    $price = $isSponsorship ? $sponsorshipPrices[$category] ?? 0 : $boothPrices[$category] ?? 0;

    // === Text positioning ===
    $titleLines = explode("\n", $title);
    $linesCount = count($titleLines) + (!empty($boothNo) ? 2 : 1);
    $lineSpacing = $height / ($linesCount + 1);

    $lineIndex = 0;
    $linePositions = [];

    if (!empty($boothNo)) {
        $linePositions[] = $y + $lineSpacing * ++$lineIndex; // Booth No
    }

    foreach ($titleLines as $line) {
        $linePositions[] = $y + $lineSpacing * ++$lineIndex; // Title lines
    }

    $defaultSizeX = $x + $width / 2;
    $defaultSizeY = $y + $lineSpacing * ++$lineIndex;
@endphp

@php
    $nonBoothCategories = ['speakerHall', 'mainStage', 'screens'];
    $isInteractiveBooth = !in_array($category, $nonBoothCategories);
@endphp


<g class="{{ $isInteractiveBooth ? 'booth' : '' }} booth-{{ $status }} booth-{{ $category }}"
    @if ($isInteractiveBooth) data-id="{{ $id }}"
    @if (!empty($boothNo)) data-no="{{ $boothNo }}" @endif
    data-title="{{ $title }}" data-size="{{ $size }}" data-status="{{ $status }}"
    data-category="{{ $category }}" data-price="{{ $price }}"
    data-is-sponsorship="{{ $isSponsorship ? 1 : 0 }}" {{-- 🔥 reservation --}} data-reserved="{{ $reserved ? 1 : 0 }}"
    data-company-name="{{ $companyName }}" data-company-logo="{{ $companyLogo }}"
    data-company-url="{{ $companyUrl }}" @endif
    style="cursor: {{ $isInteractiveBooth && !$reserved && $status === 'available' ? 'pointer' : 'default' }};">



    {{-- Booth Rectangle --}}
    <rect x="{{ $x }}" y="{{ $y }}" width="{{ $width }}" height="{{ $height }}"
        rx="12" fill="{{ $fillColor }}" opacity="0.9" />

    {{-- Booth Border --}}
    <rect x="{{ $x }}" y="{{ $y }}" width="{{ $width }}" height="{{ $height }}"
        rx="12" fill="none" stroke="#fff" stroke-width="1.5" />

    {{-- Booth No --}}
    @if (!empty($boothNo))
        <text x="{{ $x + $width / 2 }}" y="{{ $linePositions[0] }}" text-anchor="middle" dominant-baseline="middle"
            fill="white" font-weight="600" style="font-size: {{ $textSize }}px;">
            Booth No: {{ $boothNo }}
        </text>
    @endif

    {{-- Title --}}
    <text x="{{ $x + $width / 2 }}" y="{{ $linePositions[empty($boothNo) ? 0 : 1] }}" text-anchor="middle"
        dominant-baseline="middle" fill="white" font-weight="600" style="font-size: {{ $textSize }}px;">
        @foreach ($titleLines as $index => $line)
            <tspan x="{{ $x + $width / 2 }}" dy="{{ $index === 0 ? 0 : $textSize + 2 }}">{{ $line }}
            </tspan>
        @endforeach
    </text>

    {{-- Size --}}
    <text x="{{ $sizeX ?? $defaultSizeX }}" y="{{ $sizeY ?? $defaultSizeY }}" text-anchor="middle"
        dominant-baseline="middle" fill="white" font-weight="600" style="font-size: {{ $textSize }}px;">
        {{ $size }}
    </text>

    @if ($reserved)
        {{-- Black overlay (visual only) --}}
        <rect x="{{ $x }}" y="{{ $y }}" width="{{ $width }}"
            height="{{ $height }}" rx="12" fill="black" opacity="0.65" style="pointer-events: none;" />

        {{-- Lock icon --}}
        <foreignObject x="{{ $x + $width / 2 - 14 }}" y="{{ $y + $height / 2 - 14 }}" width="28" height="28"
            style="pointer-events: none;">
            <div xmlns="http://www.w3.org/1999/xhtml"
                style="display:flex;align-items:center;justify-content:center;color:white;">
                <i data-lucide="lock" class="w-6 h-6"></i>
            </div>
        </foreignObject>
    @endif


</g>
