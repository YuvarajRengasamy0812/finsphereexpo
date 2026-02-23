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
            <img class="lang-flag" src="https://flagcdn.com/gb.svg" alt="">
            <span class="lang-label">EN</span>
        </button>

        <ul class="lang-menu notranslate" translate="no">
            <li><a href="#" data-lang="ar"><img src="https://flagcdn.com/kw.svg"> العربية</a></li>
            <li><a href="#" data-lang="en"><img src="https://flagcdn.com/gb.svg"> English</a></li>
        </ul>
    </div>
</div>
