<!-- 🌍 Custom Language Switcher Wrapper -->
<div class="lang_wrapper">
    <style>
        /* 🌍 Language Switcher Custom Dropdown */
        .lang_wrapper {
            position: relative;
            display: inline-block;
            font-family: system-ui, sans-serif;
        }

        /* Hide default GTranslate UI */
        .gt_switcher_wrapper {
            display: none !important;
        }

        .lang-btn {
            background-color: transparent;
            color: #3e615d;
            font-weight: 500;
            border: 1px solid rgba(var(--itzone-white-rgb), 0.4);
            padding: 4px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .lang-btn img {
            width: 20px;
            height: 14px;
            border-radius: 2px;
        }

        .lang-menu {
            display: none;
            position: absolute;
            top: 130%;
            left: -39px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            list-style: none;
            margin: 0;
            padding: 5px 0;
            width: 180px;
            z-index: 1000;
        }

        .lang-menu.show {
            display: block;
        }

        .lang-menu li {
            margin: 0 !important;
        }

        .lang_wrapper li::before {
            content: none !important;
        }

        .lang-menu li a {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            font-weight: 500;
            text-decoration: none;
            font-size: 14px;
        }

        .lang-menu li a img {
            width: 20px;
            height: 14px;
            border-radius: 2px;
        }

        .lang-menu li a:hover {
            background: linear-gradient(to right, #c19a5f, #976737, #6b4a26);
            color: #fff;
        }
    </style>

    <div class="lang-dropdown">
        <button class="lang-btn notranslate" translate="no">
            🌐 Language
        </button>

        <ul class="lang-menu notranslate" translate="no">
            <li><a href="#" data-lang="ar"><img src="https://flagcdn.com/kw.svg"> العربية</a></li>
            <li><a href="#" data-lang="en"><img src="https://flagcdn.com/gb.svg"> English</a></li>
        </ul>
    </div>
</div>

@once
    <!-- 🌍 GTranslate Widget -->
    <script>
        window.gtranslateSettings = {
            default_language: "en",
            native_language_names: true,
            languages: ["ar", "en"],
            wrapper_selector: ".lang_wrapper",
            horizontal_position: "inline",
            flag_size: 16
        };
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/dwf.js" defer></script>
@endonce

<script>
document.addEventListener("DOMContentLoaded", function () {
    const defaultLang = "en";

    const shortNames = {
        ar: "AR",
        en: "EN"
    };

    function waitForGTranslate(cb) {
        const i = setInterval(() => {
            if (typeof doGTranslate === "function") {
                clearInterval(i);
                cb();
            }
        }, 100);
    }

    document.querySelectorAll(".lang_wrapper").forEach(wrapper => {
        const btn = wrapper.querySelector(".lang-btn");
        const menu = wrapper.querySelector(".lang-menu");
        if (!btn || !menu) return;

        function updateButtonLabel(lang) {
            const selected = menu.querySelector(`[data-lang="${lang}"]`);
            if (!selected) return;

            const flag = selected.querySelector("img").outerHTML;
            const fullText = selected.textContent.trim();
            const shortText = shortNames[lang] || fullText;

            btn.innerHTML =
                window.innerWidth < 510
                    ? `${flag} ${shortText}`
                    : `${flag} ${fullText}`;
        }

        function translate(lang) {
            waitForGTranslate(() => {
                doGTranslate(`${defaultLang}|${lang}`);
                localStorage.setItem("selectedLang", lang);
                updateButtonLabel(lang);
                menu.classList.remove("show");
            });
        }

        // Restore previous language
        const savedLang = localStorage.getItem("selectedLang");
        if (savedLang) updateButtonLabel(savedLang);

        // Toggle dropdown
        btn.addEventListener("click", e => {
            e.stopPropagation();
            menu.classList.toggle("show");
        });

        // Menu click
        menu.querySelectorAll("[data-lang]").forEach(item => {
            item.addEventListener("click", e => {
                e.preventDefault();
                translate(item.dataset.lang);
            });
        });

        // Close on outside click
        document.addEventListener("click", e => {
            if (!wrapper.contains(e.target)) {
                menu.classList.remove("show");
            }
        });

        // Responsive label update
        window.addEventListener("resize", () => {
            const currentLang = localStorage.getItem("selectedLang");
            if (currentLang) updateButtonLabel(currentLang);
        });
    });
});
</script>
