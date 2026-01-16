<!-- 🌍 Custom GTranslate Wrapper -->
<div class="gtranslate_wrapper">
    <style>
        /* 🌍 GTranslate Custom Dropdown */
        .gtranslate_wrapper {
            position: relative;
            display: inline-block;
            font-family: system-ui, sans-serif;
        }

        .gt_switcher_wrapper {
            display: none !important;
        }


        .gtranslate-btn {
            background-color: transparent;
            color: #3e615d;
            font-weight: 500;
            border: 1px solid rgba(var(--itzone-white-rgb), 0.4);
            padding: 4px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            /* transition: background 0.3s ease; */
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .gtranslate-btn img {
            width: 20px;
            height: 14px;
            border-radius: 2px;
        }

        .gtranslate-btn:hover {
            /* background: #117baa; */
        }

        .gtranslate-menu {
            display: none;
            position: absolute;
            top: 130%;
            left: -39px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            list-style: none;
            margin: 0;
            padding: 5px 0;
            width: 180px;
            z-index: 1000;
            transform: none !important;
            transition: none !important;
            animation: none !important;
        }

        .gtranslate-menu li {
            margin: 0 !important;
        }

        .gtranslate_wrapper li:before {
            content: none !important;
        }



        .gtranslate-menu.show {
            display: block;
        }

        .gtranslate-menu li a {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 8px;
            padding: 8px 12px;
            /* color: #333; */
            font-weight: 500;
            text-decoration: none;
            font-size: 14px;
            /* transition: background 0.2s ease; */
        }

        .gtranslate-menu li a img {
            width: 20px;
            height: 14px;
            border-radius: 2px;
        }

        .gtranslate-menu li a:hover {
            background: linear-gradient(to right, #c19a5f, #976737, #6b4a26);
            color: #fff;
        }
    </style>

    <div class="gtranslate-dropdown">
        <button class="gtranslate-btn notranslate" translate="no">
            <img src="https://flagcdn.com/gb.svg" alt=""> English
        </button>
        <ul class="gtranslate-menu notranslate" translate="no">
            <li><a href="#" data-lang="ar"><img src="https://flagcdn.com/ae.svg"> العربية</a></li>
            <li><a href="#" data-lang="en"><img src="https://flagcdn.com/gb.svg"> English</a></li>
            {{-- <li><a href="#" data-lang="hi"><img src="https://flagcdn.com/in.svg"> हिन्दी</a></li>
            <li><a href="#" data-lang="ms"><img src="https://flagcdn.com/my.svg"> Malay</a></li>
            <li><a href="#" data-lang="ur"><img src="https://flagcdn.com/pk.svg"> اُردُو</a></li>
            <li><a href="#" data-lang="bn"><img src="https://flagcdn.com/bd.svg"> বাংলা</a></li>
            <li><a href="#" data-lang="fr"><img src="https://flagcdn.com/fr.svg"> Français</a></li>
            <li><a href="#" data-lang="pt"><img src="https://flagcdn.com/pt.svg"> Português</a></li>
            <li><a href="#" data-lang="it"><img src="https://flagcdn.com/it.svg"> Italiano</a></li>
            <li><a href="#" data-lang="nl"><img src="https://flagcdn.com/nl.svg"> Nederlands</a></li>
            <li><a href="#" data-lang="de"><img src="https://flagcdn.com/de.svg"> Deutsch</a></li>
            <li><a href="#" data-lang="ru"><img src="https://flagcdn.com/ru.svg"> Русский</a></li>
            <li><a href="#" data-lang="es"><img src="https://flagcdn.com/es.svg"> Español</a></li>
            <li><a href="#" data-lang="zh-CN"><img src="https://flagcdn.com/cn.svg"> 中文</a></li>
            <li><a href="#" data-lang="th"><img src="https://flagcdn.com/th.svg"> ไทย</a></li>
            <li><a href="#" data-lang="tr"><img src="https://flagcdn.com/tr.svg"> Türkçe</a></li> --}}
        </ul>
    </div>
</div>

<!-- 🌍 GTranslate Widget -->
<script src="https://cdn.gtranslate.net/widgets/latest/dwf.js" defer></script>
<script>
    window.gtranslateSettings = {
        default_language: "en",
        native_language_names: true,
        languages: ["ar", "en", "hi", "ms", "ur", "bn", "fr", "pt", "it", "nl", "de", "ru", "es", "zh-CN", "th",
            "tr"
        ],
        wrapper_selector: ".gtranslate_wrapper",
        horizontal_position: "inline",
        flag_size: 16,
        switcher_vertical_position: "top"

    };
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const btn = document.querySelector(".gtranslate-btn");
        const menu = document.querySelector(".gtranslate-menu");
        const defaultLang = "en";

        const shortNames = {
            "ar": "AR",
            "en": "EN",
            "hi": "HI",
            "ms": "MS",
            "ur": "UR",
            "bn": "BN",
            "fr": "FR",
            "pt": "PT",
            "it": "IT",
            "nl": "NL",
            "de": "DE",
            "ru": "RU",
            "es": "ES",
            "zh-CN": "ZH",
            "th": "TH",
            "tr": "TR"
        };

        // Update button text & flag
        // function updateButtonLabel(lang) {
        //     const selected = menu.querySelector(`[data-lang="${lang}"]`);
        //     if (selected) {
        //         btn.innerHTML = selected.innerHTML; // flag + text
        //     }
        // }
        function updateButtonLabel(lang) {
            const selected = menu.querySelector(`[data-lang="${lang}"]`);
            if (!selected) return;

            const flag = selected.querySelector("img").outerHTML;
            const fullText = selected.textContent.trim();
            const shortText = shortNames[lang] || fullText;

            if (window.innerWidth < 510) {
                btn.innerHTML = flag + " " + shortText;
            } else {
                btn.innerHTML = flag + " " + fullText;
            }
        }


        // Translate function
        function callGTranslate(targetLang) {
            if (typeof doGTranslate !== "function") return;

            doGTranslate(defaultLang + "|" + targetLang);
            updateButtonLabel(targetLang);

            // Save to localStorage
            localStorage.setItem("selectedLang", targetLang);

            // Close menu
            menu.classList.remove("show");
        }

        // Restore previous selection
        const savedLang = localStorage.getItem("selectedLang") || defaultLang;
        updateButtonLabel(savedLang);

        // Toggle dropdown
        btn.addEventListener("click", () => menu.classList.toggle("show"));

        // Close on click outside
        document.addEventListener("click", (e) => {
            if (!e.target.closest(".gtranslate-dropdown")) {
                menu.classList.remove("show");
            }
        });

        // Menu clicks
        menu.querySelectorAll("a[data-lang]").forEach(a => {
            a.addEventListener("click", (e) => {
                e.preventDefault();
                const lang = a.getAttribute("data-lang");
                callGTranslate(lang);
            });
        });

        // Optional: update after slight delay (GTranslate modifies DOM after switch)
        window.addEventListener("load", () => {
            const storedLang = localStorage.getItem("selectedLang");
            if (storedLang && storedLang !== defaultLang) {
                setTimeout(() => updateButtonLabel(storedLang), 1000);
            }
        });
        window.addEventListener("resize", () => {
            const currentLang = localStorage.getItem("selectedLang") || defaultLang;
            updateButtonLabel(currentLang);
        });

    });
</script>
