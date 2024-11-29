(() => {
    "use strict";

    // State management variables and functions
    var state = {};
    var cookieName = "asw";

    function updateState(newState) {
        var updatedState = {
            ...state,
            states: {
                ...state.states,
                ...newState,
            },
        };
        saveState(updatedState);
        return updatedState;
    }

    function saveState(newState) {
        state = { ...state, ...newState };
        setCookie(cookieName, JSON.stringify(state));
    }

    function getStateValue(key) {
        return state?.states?.[key];
    }

    function loadState(useCache = true) {
        if (useCache) return state;
        var cookie = getCookie(cookieName);
        if (cookie) state = JSON.parse(cookie);
        return state;
    }

    function setCookie(name, value, days = 1) {
        var date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        var expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = decodeURIComponent(document.cookie).split(";");
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (" " == c.charAt(0)) c = c.substring(1);
            if (0 == c.indexOf(nameEQ)) return c.substring(nameEQ.length, c.length);
        }
        return "";
    }

    // Functions for adjusting font size
    function adjustFontSize(scale = 1) {
        document
            .querySelectorAll(
                "h1,h2,h3,h4,h5,h6,p,a,dl,dt,li,ol,th,td,span,blockquote,.asw-text"
            )
            .forEach((element) => {
                if (
                    !element.classList.contains("material-icons") &&
                    !element.classList.contains("fa")
                ) {
                    var originalFontSize = Number(
                        element.getAttribute("data-asw-orgFontSize") || 0
                    );
                    if (!originalFontSize) {
                        originalFontSize = parseInt(
                            window.getComputedStyle(element).getPropertyValue("font-size")
                        );
                        element.setAttribute(
                            "data-asw-orgFontSize",
                            String(originalFontSize)
                        );
                    }
                    var newFontSize = originalFontSize * scale;
                    element.style["font-size"] = newFontSize + "px";
                }
            });
        var amountDisplay = document.querySelector(".asw-amount");
        if (amountDisplay) {
            amountDisplay.innerText = `${(100 * scale).toFixed(0)}%`;
        }
    }

    // Function to apply CSS styles dynamically
    function applyStyle({ id, css }) {
        if (css) {
            var styleElement =
                document.getElementById(id || "") || document.createElement("style");
            styleElement.innerHTML = css;
            if (!styleElement.id) {
                styleElement.id = id;
                document.head.appendChild(styleElement);
            }
        }
    }

    // Utility functions for generating CSS
    var prefixes = ["-o-", "-ms-", "-moz-", "-webkit-", ""];
    var filterProperties = ["filter"];

    function generateCSS({ styles, selector, childrenSelector, css }) {
        var styleString = "";
        if (styles) {
            for (var property in styles) {
                var value = styles[property];
                var properties = filterProperties.includes(property) ? prefixes : [""];
                properties.forEach((prefix) => {
                    styleString += `${prefix}${property}:${value} !important;`;
                });
            }
            if (styleString.length && selector) {
                var combinedSelectors = (childrenSelector || [""]).map(
                    (child) => `${selector} ${child}`.trim()
                );
                css =
                    combinedSelectors.map((sel) => `${sel}{${styleString}}`).join("") +
                    (css || "");
            }
        }
        return css || "";
    }

    // Function to toggle CSS classes and styles
    function toggleFeature({ id, enable, styles, selector, childrenSelector, css, customFunction }) {
        var styleId = `asw-${id}`;
        if (enable) {
            if (customFunction) {
                customFunction(true);
            } else {
                applyStyle({
                    css: generateCSS({ styles, selector, childrenSelector, css }),
                    id: styleId,
                });
            }
        } else {
            if (customFunction) {
                customFunction(false);
            } else {
                var styleElement = document.getElementById(styleId);
                if (styleElement) styleElement.remove();
            }
        }
        document.documentElement.classList.toggle(styleId, enable);
    }


    // Feature definitions
    var baseSelectors = ["", "*:not(.material-icons,.asw-menu,.asw-menu *)"];
    var titleSelectors = [
        "h1",
        "h2",
        "h3",
        "h4",
        "h5",
        "h6",
        ".wsite-headline",
        ".wsite-content-title",
    ];
    var contentSelectors = [
        ...titleSelectors,
        //"img",
        "p",
        "i",
        "svg",
        "a",
        "button:not(.asw-btn)",
        "label",
        "li",
        "ol",
        "strong", // Added strong tag
        "em",     // Optionally add em tag if needed
        "b",
        "body",     // Optionally add b tag if needed
        ".bg-white",
        ".bg-secondary",
        ".bg-primary",
        ".asw-menu-content",
        ".asw-menu-header",
        ".asw-menu",
        ""
    ];
    var features = {
        "dark-contrast": {
            styles: {
                color: "#FFF",
                fill: "#FFF",
                "background-color": "#000",
            },
            childrenSelector: contentSelectors,
        },
        "light-contrast": {
            styles: {
                color: "#000",
                fill: "#000",
                "background-color": "#FFF",
            },
            childrenSelector: contentSelectors,
        },
        "high-contrast": {
            styles: {
                filter: "contrast(125%)",
            },
        },
        "high-saturation": {
            styles: {
                filter: "saturate(200%)",
            },
        },
        "low-saturation": {
            styles: {
                filter: "saturate(50%)",
            },
        },
        monochrome: {
            styles: {
                filter: "grayscale(100%)",
            },
        },
        "stop-animations": {
            id: "stop-animations",
            selector: "html",
            childrenSelector: ["*"],
            styles: {
                transition: "none",
                "animation-fill-mode": "forwards",
                "animation-iteration-count": "1",
                "animation-duration": ".01s",
            },
        },
        "readable-font": {
            id: "readable-font",
            selector: "html",
            childrenSelector: [...baseSelectors, ...contentSelectors],
            styles: {
                "font-family":
                    "OpenDyslexic3,Comic Sans MS,Arial,Helvetica,sans-serif",
            },
            css: '@font-face {font-family: OpenDyslexic3;src: url("https://website-widgets.pages.dev/fonts/OpenDyslexic3-Regular.woff") format("woff"), url("https://website-widgets.pages.dev/fonts/OpenDyslexic3-Regular.ttf") format("truetype");}',
        },
        "big-cursor": {
            id: "big-cursor",
            selector: "body",
            childrenSelector: ["*"],
            styles: {
                cursor:
                    'url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'98px\' height=\'98px\' viewBox=\'0 0 48 48\'%3E%3Cpath fill=\'%23E0E0E0\' d=\'M27.8 39.7c-.1 0-.2 0-.4-.1s-.4-.3-.6-.5l-3.7-8.6-4.5 4.2c-.1.2-.3.3-.6.3-.1 0-.3 0-.4-.1-.3-.1-.6-.5-.6-.9V12c0-.4.2-.8.6-.9.1-.1.3-.1.4-.1.2 0 .5.1.7.3l16 15c.3.3.4.7.3 1.1-.1.4-.5.6-.9.7l-6.3.6 3.9 8.5c.1.2.1.5 0 .8-.1.2-.3.5-.5.6l-2.9 1.3c-.2-.2-.4-.2-.5-.2z\'/%3E%3Cpath fill=\'%23212121\' d=\'m18 12 16 15-7.7.7 4.5 9.8-2.9 1.3-4.3-9.9L18 34V12m0-2c-.3 0-.5.1-.8.2-.7.3-1.2 1-1.2 1.8v22c0 .8.5 1.5 1.2 1.8.3.2.6.2.8.2.5 0 1-.2 1.4-.5l3.4-3.2 3.1 7.3c.2.5.6.9 1.1 1.1.2.1.5.1.7.1.3 0 .5-.1.8-.2l2.9-1.3c.5-.2.9-.6 1.1-1.1.2-.5.2-1.1 0-1.5l-3.3-7.2 4.9-.4c.8-.1 1.5-.6 1.7-1.3.3-.7.1-1.6-.5-2.1l-16-15c-.3-.5-.8-.7-1.3-.7z\'/%3E%3C/svg%3E") 40 15, auto',
            },
        },
        "highlight-title": {
            id: "highlight-title",
            selector: "html",
            childrenSelector: titleSelectors,
            styles: {
                outline: "2px solid #2d233d",
                "outline-offset": "2px",
            },
        },
        "highlight-links": {
            id: "highlight-links",
            selector: "html",
            childrenSelector: ["a[href]"],
            styles: {
                outline: "2px solid #2d233d",
                "outline-offset": "2px",
            },
        },
        "letter-spacing": {
            id: "letter-spacing",
            selector: "html",
            childrenSelector: baseSelectors,
            styles: {
                "letter-spacing": "2px",
            },
        },
        "line-height": {
            id: "line-height",
            selector: "html",
            childrenSelector: baseSelectors,
            styles: {
                "line-height": "3",
            },
        },
        "font-weight": {
            id: "font-weight",
            selector: "html",
            childrenSelector: baseSelectors,
            styles: {
                "font-weight": "700",
            },
        },
        "readable-guide": {
            id: "readable-guide",
            selector: "body",
            styles: {},
            customFunction: function (enable) {
                if (enable) {
                    // Create the reading guide element
                    var guide = document.createElement("div");
                    guide.id = "asw-reading-guide";
                    guide.style.position = "fixed";
                    guide.style.top = "0";
                    guide.style.left = "0";
                    guide.style.width = "100%";
                    guide.style.height = "30px"; // Adjust the height as needed
                    guide.style.backgroundColor = "rgba(0, 0, 0, 0.1)";
                    guide.style.pointerEvents = "none";
                    guide.style.zIndex = "999999";
                    document.body.appendChild(guide);

                    // Update the position of the guide on mouse move
                    document.addEventListener("mousemove", moveGuide);
                } else {
                    // Remove the reading guide element
                    var guide = document.getElementById("asw-reading-guide");
                    if (guide) guide.remove();
                    document.removeEventListener("mousemove", moveGuide);
                }

                function moveGuide(event) {
                    var guide = document.getElementById("asw-reading-guide");
                    if (guide) {
                        var y = event.clientY - guide.offsetHeight / 2;
                        guide.style.top = y + "px";
                    }
                }
            },
        },
    };

    // Apply contrast settings
    function applyContrast() {
        var contrastKey = getStateValue("contrast");
        var css = "";
        var feature = features[contrastKey];
        if (feature) {
            css = generateCSS({
                ...feature,
                selector: "html.aws-filter",
            });
        }
        applyStyle({ css, id: "asw-filter-style" });
        document.documentElement.classList.toggle("aws-filter", Boolean(contrastKey));
    }

    // Apply various features based on state
    function applyFeatures() {
        var states = loadState().states;

        adjustFontSize(states.fontSize || 1);

        for (var key in features) {
            var feature = features[key];
            var enabled = states[key];
            toggleFeature({
                ...feature,
                enable: enabled,
                id: feature.id || key,
            });
        }

        applyContrast();
    }

    // Initialize the widget
    function initializeWidget(options) {
        var defaultOptions = {
            lang: "en",
            position: "bottom-left",
        };
        try {
            var savedState = loadState(false);
            defaultOptions = { ...defaultOptions, ...savedState };
            applyFeatures();
        } catch (e) { }

        saveState({ ...defaultOptions, ...options });

        setupWidgetUI({ ...defaultOptions, ...options });
    }

    // Setup the widget UI (excluding the button)
    function setupWidgetUI(options) {
        var container = document.createElement("div");
        container.classList.add("asw-container");
        // Insert the menu HTML
        container.innerHTML = menuHTML;
        // Append the container to the body
        document.body.appendChild(container);
        // Ensure the menu and overlay are hidden by default
        var menu = container.querySelector(".asw-menu");
        var overlay = container.querySelector(".asw-overlay");
        menu.style.display = "none";
        overlay.style.display = "none";
        // Setup the widget functionality
        setupMenu(container, options);
    }

    // Generate the widget menu (excluding the button)
    // Generate the widget menu (excluding the button)
    // Generate the widget menu (excluding the button)
    var menuHTML = `
<style>
  /* Widget Menu Styles */
  .asw-menu,
  .asw-widget {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
  }
  .asw-menu *,
  .asw-widget * {
    box-sizing: border-box !important;
  }
  .asw-menu {
    position: fixed;
    left: 0;
    top: 0;
    box-shadow: 0 0 20px #00000080;
    opacity: 1;
    transition: 0.3s;
    z-index: 500000;
    overflow: hidden;
    background: #ebe7e0;
    width: 500px;
    line-height: 1;
    font-size: 16px;
    height: 100%;
    letter-spacing: 0.015em;
  }
  .asw-menu * {
    color: #000 !important;
    font-family: inherit;
    padding: 0;
    margin: 0;
    line-height: 1 !important;
    letter-spacing: normal !important;
  }
  .asw-menu-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-left: 18px;
    padding-right: 18px;
    height: 55px;
    font-weight: 700 !important;
    background-color: #554570 !important;
  }
  .asw-menu-title {
    font-size: 16px !important;
    color: #fff !important;
  }
  .asw-menu-header svg {
    fill: #554570 !important;
    width: 24px !important;
    height: 24px !important;
    min-width: 24px !important;
    min-height: 24px !important;
    max-width: 24px !important;
    max-height: 24px !important;
  }
  .asw-menu-header > div {
    display: flex;
  }
  .asw-menu-header div[role='button'] {
    padding: 5px;
    background: #fff !important;
    cursor: pointer;
    border-radius: 50%;
    transition: opacity 0.3s ease;
  }
  .asw-menu-header div[role='button']:hover {
    opacity: 0.8;
  }
  .asw-card {
    margin: 0 15px 20px;
  }
  .asw-card-title {
    font-size: 14px !important;
    padding: 15px 0;
    font-weight: 600 !important;
    opacity: 0.8;
  }
  .asw-menu .asw-select {
    width: 100% !important;
    padding: 0 15px !important;
    font-size: 16px !important;
    font-family: inherit !important;
    font-weight: 600 !important;
    border-radius: 45px !important;
    background: #fff !important;
    border: none !important;
    min-height: 45px !important;
    max-height: 45px !important;
    height: 45px !important;
    color: inherit !important;
  }
  .asw-items {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 1rem;
  }
  .asw-btn {
    aspect-ratio: 6/5;
    border-radius: 12px;
    padding: 0 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    color: #333;
    font-size: 16px !important;
    background: #fff !important;
    border: 2px solid transparent !important;
    transition: border-color 0.2s ease;
    cursor: pointer;
    word-break: break-word;
    gap: 10px;
    position: relative;
    width: auto !important;
    height: auto !important;
  }
  .asw-adjust-font .asw-label div,
  .asw-btn .asw-translate {
    font-size: 14px !important;
    font-weight: 600 !important;
  }
  .asw-minus,
  .asw-plus {
    background-color: #ebe7e0 !important;
    border: 2px solid transparent;
    transition: border 0.2s ease;
  }
  .asw-minus:hover,
  .asw-plus:hover {
    border-color: #554570 !important;
  }
  .asw-amount {
    font-size: 18px !important;
    font-weight: 600 !important;
  }
  .asw-adjust-font svg {
    width: 24px !important;
    height: 24px !important;
    min-width: 24px !important;
    min-height: 24px !important;
    max-width: 24px !important;
    max-height: 24px !important;
  }
  .asw-btn svg {
    width: 34px !important;
    height: 34px !important;
    min-width: 34px !important;
    min-height: 34px !important;
    max-width: 34px !important;
    max-height: 34px !important;
  }
  .asw-btn.asw-selected,
  .asw-btn:hover {
    border-color: #554570 !important;
  }
  .asw-btn.asw-selected span,
  .asw-btn.asw-selected svg {
    fill: #554570 !important;
    color: #554570 !important;
  }
  .asw-btn.asw-selected:after {
    content: "✓";
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: #554570 !important;
    color: #fff;
    padding: 6px;
    font-size: 10px;
    width: 18px;
    height: 18px;
    border-radius: 100%;
    line-height: 6px;
  }
  .asw-footer {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: #fff;
    padding: 20px;
    text-align: center;
    border-top: 2px solid #ebe7e0;
  }
  .asw-footer a {
    font-size: 16px !important;
    text-decoration: none !important;
    color: #000 !important;
    background: transparent !important;
    font-weight: 600 !important;
  }
  .asw-footer a:hover,
  .asw-footer a:hover span {
    color: #554570 !important;
  }
  .asw-menu-content {
    overflow: auto;
    max-height: calc(100% - 80px);
    padding: 30px 0 15px;
  }
  .asw-adjust-font {
    background: #fff;
    padding: 20px;
    margin-bottom: 20px;
  }
  .asw-adjust-font .asw-label {
    display: flex;
    justify-content: flex-start;
  }
  .asw-adjust-font > div {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
    align-items: center;
    font-size: 15px;
  }
  .asw-adjust-font .asw-label div {
    font-size: 15px !important;
  }
  .asw-adjust-font div[role='button'] {
    background: #ebe7e0 !important;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .asw-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 10000;

  }
  @media only screen and (max-width: 560px) {
    .asw-menu {
      width: 100%;
    }
  }
  @media only screen and (max-width: 420px) {
    .asw-items {
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 0.5rem;
    }
  }
</style>
<div class="asw-menu">
  <div class="asw-menu-header">
    <div class="asw-menu-title asw-translate">Accessibility Menu</div>
    <div style="gap: 15px">
      <div role="button" class="asw-menu-reset" title="Reset settings">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M12 4c2.1 0 4.1.8 5.6 2.3 3.1 3.1 3.1 8.2 0 11.3a7.78 7.78 0 0 1-6.7 2.3l.5-2c1.7.2 3.5-.4 4.8-1.7a6.1 6.1 0 0 0 0-8.5A6.07 6.07 0 0 0 12 6v4.6l-5-5 5-5V4M6.3 17.6C3.7 15 3.3 11 5.1 7.9l1.5 1.5c-1.1 2.2-.7 5 1.2 6.8.5.5 1.1.9 1.8 1.2l-.6 2a8 8 0 0 1-2.7-1.8Z"/>
        </svg>
      </div>
      <div role="button" class="asw-menu-close" title="Close">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41Z"/>
        </svg>
      </div>
    </div>
  </div>
  <div class="asw-menu-content">
    <div class="asw-card">
      <select id="asw-language" title="Language" class="asw-select">
        <option value="en">English (English)</option>
        <option value="lv">Latviešu (Latvian)</option>
        <!-- Add more language options as needed -->
      </select>
    </div>
    <div class="asw-card">
      <div class="asw-card-title">Content Adjustments</div>
      <div class="asw-adjust-font">
        <div class="asw-label" style="margin: 0">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="margin-right: 15px">
            <path d="M2 4v3h5v12h3V7h5V4H2m19 5h-9v3h3v7h3v-7h3V9Z"/>
          </svg>
          <div class="asw-translate">Adjust Font Size</div>
        </div>
        <div>
          <div
            class="asw-minus"
            data-key="font-size"
            role="button"
            aria-pressed="false"
            title="Decrease Font Size"
            tabindex="0"
          >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M19 13H5v-2h14v2Z"/>
            </svg>
          </div>
          <div class="asw-amount">100%</div>
          <div
            class="asw-plus"
            data-key="font-size"
            role="button"
            aria-pressed="false"
            title="Increase Font Size"
            tabindex="0"
          >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2Z"/>
            </svg>
          </div>
        </div>
      </div>
      <div class="asw-items content">
        <!-- Content Adjustment Buttons -->
        <!-- Content Adjustments Buttons -->
        ${[
            {
                label: "Font Weight",
                key: "font-weight",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.5 15.5H10v-3h3.5A1.5 1.5 0 0 1 15 14a1.5 1.5 0 0 1-1.5 1.5m-3.5-9h3A1.5 1.5 0 0 1 14.5 8 1.5 1.5 0 0 1 13 9.5h-3m5.6 1.29c.97-.68 1.65-1.79 1.65-2.79 0-2.26-1.75-4-4-4H7v14h7.04c2.1 0 3.71-1.7 3.71-3.79 0-1.52-.86-2.82-2.15-3.42Z"/></svg>',
            },
            {
                label: "Line Height",
                key: "line-height",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21 22H3v-2h18v2m0-18H3V2h18v2m-11 9.7h4l-2-5.4-2 5.4M11.2 6h1.7l4.7 12h-2l-.9-2.6H9.4L8.5 18h-2l4.7-12Z"/></svg>',
            },
            {
                label: "Letter Spacing",
                key: "letter-spacing",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 3v18h-2V3h2M4 3v18H2V3h2m6 10.7h4l-2-5.4-2 5.4M11.2 6h1.7l4.7 12h-2l-.9-2.6H9.4L8.5 18h-2l4.7-12Z"/></svg>',
            },
            {
                label: "Dyslexia Font",
                key: "readable-font",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.59 11.59-8.09 8.09L9.83 16l-1.41 1.41 5.08 5.09L23 13M6.43 11 8.5 5.5l2.07 5.5m1.88 5h2.09L9.43 3H7.57L2.46 16h2.09l1.12-3h5.64l1.14 3Z"/></svg>',
            },
            {
                label: "Highlight Links",
                key: "highlight-links",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2M9 18H7v-2h2v2m6 0h-2v-2h2v2m0-14h-6v2h6V4m-3 14h-2v-2h2v2m4-2h-2v-2h2v2m0-4h-2V8h2v6m-6 0h-2v-6h2v6M9 10H7V8h2v2Z"/></svg>',
            },
            {
                label: "Highlight Title",
                key: "highlight-title",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 4v3h5.5v12h3V7H19V4H5Z"/></svg>',
            },
        ]
            .map(
                (item) => `
          <button class="asw-btn" type="button" data-key="${item.key}" title="${item.label}">
            ${item.icon}
            <span class="asw-translate">${item.label}</span>
          </button>
        `
            )
            .join("")}
      </div>
    </div>
    <div class="asw-card">
      <div class="asw-card-title">Color Adjustments</div>
      <div class="asw-items contrast">
        <!-- Contrast Adjustment Buttons -->
        ${[
            {
                label: "Monochrome",
                key: "monochrome",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m19 19-7-8v8H5l7-8V5h7m0-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Z"/></svg>',
            },
            {
                label: "Low Saturation",
                key: "low-saturation",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11 9h2v2h-2V9m-2 2h2v2H9v-2m4 0h2v2h-2v-2m2-2h2v2h-2V9M7 9h2v2H7V9m12-6H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2M9 18H7v-2h2v2m4 0h-2v-2h2v2m4 0h-2v-2h2v2m2-7h-2v2h2v2h-2v-2h-2v2h-2v-2h-2v2H9v-2H7v2H5v-2h2v-2H5V5h14v6Z"/></svg>',
            },
            {
                label: "High Saturation",
                key: "high-saturation",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 16a4 4 0 0 1-4-4 4 4 0 0 1 4-4 4 4 0 0 1 4 4 4 4 0 0 1-4 4m6.7-3.6a6.06 6.06 0 0 0-.86-.4 5.98 5.98 0 0 0 3.86-5.59 6 6 0 0 0-6.78.54A5.99 5.99 0 0 0 12 .81a6 6 0 0 0-2.92 6.14A6 6 0 0 0 2.3 6.4 5.95 5.95 0 0 0 6.16 12a6 6 0 0 0-3.86 5.58 6 6 0 0 0 6.78-.54A6 6 0 0 0 12 23.19a6 6 0 0 0 2.92-6.14 6 6 0 0 0 6.78.54 5.98 5.98 0 0 0-3-5.19Z"/></svg>',
            },
            {
                label: "High Contrast",
                key: "high-contrast",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1 17.93a8 8 0 0 1 0-15.86v15.86zm2-15.86a8 8 0 0 1 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87a8 8 0 0 1-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93a8.4 8.4 0 0 1-.19 1z"/></svg>',
            },
            {
                label: "Light Contrast",
                key: "light-contrast",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 18a6 6 0 0 1-6-6 6 6 0 0 1 6-6 6 6 0 0 1 6 6 6 6 0 0 1-6 6m8-2.69L23.31 12 20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69Z"/></svg>',
            },
            {
                label: "Dark Contrast",
                key: "dark-contrast",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18 12c0-4.5-1.92-8.74-6-10a10 10 0 0 0 0 20c4.08-1.26 6-5.5 6-10Z"/></svg>',
            },
        ]
            .map(
                (item) => `
          <button class="asw-btn asw-filter" type="button" data-key="${item.key}" title="${item.label}">
            ${item.icon}
            <span class="asw-translate">${item.label}</span>
          </button>
        `
            )
            .join("")}
      </div>
    </div>
    <div class="asw-card">
      <div class="asw-card-title">Tools</div>
      <div class="asw-items tools">
        <!-- Tool Buttons -->
        ${[
            {
                label: "Big Cursor",
                key: "big-cursor",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11 1.07C7.05 1.56 4 4.92 4 9h7m-7 6a8 8 0 0 0 8 8 8 8 0 0 0 8-8v-4H4m9-9.93V9h7a8 8 0 0 0-7-7.93Z"/></svg>',
            },
            {
                label: "Stop Animations",
                key: "stop-animations",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 12c0-5.54-4.46-10-10-10-1.17 0-2.3.19-3.38.56l.7 1.94A7.15 7.15 0 0 1 12 3.97 8.06 8.06 0 0 1 20.03 12 8.06 8.06 0 0 1 12 20.03 8.06 8.06 0 0 1 3.97 12c0-.94.19-1.88.53-2.72l-1.94-.66A10.37 10.37 0 0 0 2 12c0 5.54 4.46 10 10 10s10-4.46 10-10M5.47 3.97c.85 0 1.53.71 1.53 1.5C7 6.32 6.32 7 5.47 7c-.79 0-1.5-.68-1.5-1.53 0-.79.71-1.5 1.5-1.5M18 12c0-3.33-2.67-6-6-6s-6 2.67-6 6 2.67 6 6 6 6-2.67 6-6m-7-3v6H9V9m6 0v6h-2V9"/></svg>',
            },
            {
                label: "Reading Guide",
                key: "readable-guide",
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 8a3 3 0 0 0 3-3 3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3m0 3.54A13.15 13.15 0 0 0 3 8v11c3.5 0 6.64 1.35 9 3.54A13.15 13.15 0 0 1 21 19V8c-3.5 0-6.64 1.35-9 3.54Z"/></svg>',
            },
        ]
            .map(
                (item) => `
          <button class="asw-btn asw-tools" type="button" data-key="${item.key}" title="${item.label}">
            ${item.icon}
            <span class="asw-translate">${item.label}</span>
          </button>
        `
            )
            .join("")}
      </div>
    </div>
  </div>
</div>
<div class="asw-overlay"></div>
`;




    // Function to setup menu functionality
    function setupMenu(container, options) {
        var menu = container.querySelector(".asw-menu");
        var overlay = container.querySelector(".asw-overlay");

        // Open and Close Menu Functions
        function openMenu() {
            menu.style.display = "block";
            overlay.style.display = "block";
        }

        function closeMenu() {
            menu.style.display = "none";
            overlay.style.display = "none";
        }

        // Attach event listeners to close buttons
        container.querySelectorAll(".asw-menu-close, .asw-overlay").forEach((el) => {
            el.addEventListener("click", closeMenu);
        });

        // Reset settings
        var resetButton = container.querySelector(".asw-menu-reset");
        if (resetButton) {
            resetButton.addEventListener("click", function () {
                saveState({ states: {} });
                applyFeatures();
                // Update UI
                container.querySelectorAll(".asw-selected").forEach((el) => {
                    el.classList.remove("asw-selected");
                });
            });
        }

        // Font size adjustment buttons
        var minusButton = container.querySelector(".asw-minus");
        var plusButton = container.querySelector(".asw-plus");
        var amountDisplay = container.querySelector(".asw-amount");

        minusButton.addEventListener("click", function () {
            var currentScale = getStateValue("fontSize") || 1;
            currentScale = Math.max(0.1, currentScale - 0.1);
            adjustFontSize(currentScale);
            updateState({ fontSize: currentScale });
            amountDisplay.innerText = `${(100 * currentScale).toFixed(0)}%`;
        });

        plusButton.addEventListener("click", function () {
            var currentScale = getStateValue("fontSize") || 1;
            currentScale = Math.min(2, currentScale + 0.1);
            adjustFontSize(currentScale);
            updateState({ fontSize: currentScale });
            amountDisplay.innerText = `${(100 * currentScale).toFixed(0)}%`;
        });

        // Feature buttons
        container.querySelectorAll(".asw-btn").forEach((button) => {
            button.addEventListener("click", function () {
                var key = button.dataset.key;
                var isSelected = button.classList.contains("asw-selected");

                if (button.classList.contains("asw-filter")) {
                    // Handle contrast features
                    container.querySelectorAll(".asw-filter").forEach((el) => {
                        el.classList.remove("asw-selected");
                    });
                    updateState({ contrast: isSelected ? null : key });
                    if (!isSelected) button.classList.add("asw-selected");
                    applyContrast();
                } else {
                    // Toggle other features
                    button.classList.toggle("asw-selected", !isSelected);
                    updateState({ [key]: !isSelected });
                    applyFeatures();
                }
            });
        });

        // Language selection
        var languageSelect = container.querySelector("#asw-language");
        var languages = [
            { code: "en", label: "English (English)" },
            { code: "lv", label: "Latviešu (Latvian)" },
            // Add more languages as needed
        ];

        languageSelect.innerHTML = languages
            .map((lang) => `<option value="${lang.code}">${lang.label}</option>`)
            .join("");

        languageSelect.value = options.lang || "en";

        languageSelect.addEventListener("change", function () {
            updateState({ lang: languageSelect.value });
            translateMenu(container);
        });

        // Apply translations
        translateMenu(container);

        // Restore previous state
        var states = loadState().states || {};
        for (var key in states) {
            if (states[key] && key !== "fontSize" && key !== "contrast") {
                var button = container.querySelector(`.asw-btn[data-key="${key}"]`);
                if (button) button.classList.add("asw-selected");
            }
        }
        if (states.contrast) {
            var contrastButton = container.querySelector(
                `.asw-btn[data-key="${states.contrast}"]`
            );
            if (contrastButton) contrastButton.classList.add("asw-selected");
        }
    }

    // Function to attach click listener to the widget open button
    function attachButtonClickListener() {
        var button = document.querySelector(".asw-menu-btn");
        if (button) {
            button.addEventListener("click", function (event) {
                event.preventDefault();
                event.stopPropagation();
                event.stopImmediatePropagation();

                var menu = document.querySelector(".asw-menu");
                if (menu) {
                    if (menu.style.display === "block") {
                        menu.style.display = "none";
                        document.querySelector(".asw-overlay").style.display = "none";
                    } else {
                        menu.style.display = "block";
                        document.querySelector(".asw-overlay").style.display = "block";
                    }
                } else {
                    // Initialize the menu if it doesn't exist
                    setupWidgetUI({});
                }
            });
        } else {
            console.warn("Accessibility widget button not found.");
        }
    }

    // Translation function
    function translateMenu(container) {
        var translations = {
            en: { "Accessibility Menu": "Accessibility Menu", "Reset settings": "Reset settings", "Close": "Close", "Content Adjustments": "Content Adjustments", "Adjust Font Size": "Adjust Font Size", "Highlight Title": "Highlight Title", "Highlight Links": "Highlight Links", "Readable Font": "Readable Font", "Color Adjustments": "Color Adjustments", "Dark Contrast": "Dark Contrast", "Light Contrast": "Light Contrast", "High Contrast": "High Contrast", "High Saturation": "High Saturation", "Low Saturation": "Low Saturation", "Monochrome": "Monochrome", "Tools": "Tools", "Reading Guide": "Reading Guide", "Stop Animations": "Stop Animations", "Big Cursor": "Big Cursor", "Increase Font Size": "Increase Font Size", "Decrease Font Size": "Decrease Font Size", "Letter Spacing": "Letter Spacing", "Line Height": "Line Height", "Font Weight": "Font Weight", "Dyslexia Font": "Dyslexia Font", "Language": "Language", "Open Accessibility Menu": "Open Accessibility Menu" },
            lv: { "Accessibility Menu": "Pieejamības izvēlne", "Reset settings": "Atiestatīt iestatījumus", "Close": "Aizvērt", "Content Adjustments": "Satura pielāgojumi", "Adjust Font Size": "Pielāgot fonta izmēru", "Highlight Title": "Izcelt virsrakstu", "Highlight Links": "Izcelt saites", "Readable Font": "Lasāms fonts", "Color Adjustments": "Krāsu pielāgojumi", "Dark Contrast": "Tumšs kontrasts", "Light Contrast": "Gaišs kontrasts", "High Contrast": "Augsts kontrasts", "High Saturation": "Augsta piesātinātība", "Low Saturation": "Zema piesātinātība", "Monochrome": "Melnbalts", "Tools": "Rīki", "Reading Guide": "Lasīšanas ceļvedis", "Stop Animations": "Apturēt animācijas", "Big Cursor": "Liels kursors", "Increase Font Size": "Palielināt fonta izmēru", "Decrease Font Size": "Samazināt fonta izmēru", "Letter Spacing": "Burtu atstarpes", "Line Height": "Rindas augstums", "Font Weight": "Fonta biezums", "Dyslexia Font": "Dizleksijas fonts", "Language": "Valoda", "Open Accessibility Menu": "Atvērt pieejamības izvēlni" },
            // Add more translations as needed
        };

        var currentLang = getStateValue("lang") || "lv";
        var dict = translations[currentLang] || translations["lv"];

        container.querySelectorAll(".asw-translate").forEach((el) => {
            var key = el.getAttribute("data-translate") || el.textContent.trim();
            el.setAttribute("data-translate", key);
            el.textContent = dict[key] || key;
        });

        container.querySelectorAll("[title]").forEach((el) => {
            var key = el.getAttribute("data-translate") || el.getAttribute("title");
            el.setAttribute("data-translate", key);
            el.setAttribute("title", dict[key] || key);
        });
    }

    // Initialize on DOM ready
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize the widget without appending the button
        initializeWidget({});

        // Attach click listener to the existing button in HTML
        attachButtonClickListener();
    });
})();
