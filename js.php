<script>
    
    function ready(fn){var d=document;(d.readyState=='loading')?d.addEventListener('DOMContentLoaded',fn):fn();}
    ready(function () { 
        addLanguageButtonListener();
        addLanguageOptionListener();
        addLanguageSearchListener();            
        addPanelChangeListener();
        addHeaderPrimaryMenuListener();
    });


    function addLanguageButtonListener() {
        const language_button = document.querySelector('.language-button');
        if(language_button) {
            language_button.addEventListener('click', function (event) {
                let target = event.target;
                while(target && (!target.className || target.className.indexOf('languages-slide-in-panel') == -1)) {
                    target = target.parentNode;
                }
                if(target && !event.target.dataset.language) {
                    event.preventDefault();
                    return false;
                }

                if(this.className.indexOf('active') > -1) {
                    this.className = this.className.replaceAll('active', '');
                } else {
                    this.className += ' active';
                }
            });
        }
    }

    function addLanguageOptionListener() {
        const language_lis = document.querySelectorAll('.screen .screen-body .side-panel .languages-slide-in-panel ul li');
        for(let i = 0; i < language_lis.length; ++i) {
            const language_li = language_lis[i];
            language_li.addEventListener('click', function (event) {
                for(let j = 0; j < language_lis.length; ++j) {
                    const _language_li = language_lis[j];
                    _language_li.className = _language_li.className.replaceAll('active', '');                    
                }
                this.className += ' active';
                const language = this.dataset.language;
                const language_button_p = document.querySelector('.screen .screen-body .side-panel .bottom-menu li.language-button p');
                if(language_button_p) {
                    language_button_p.innerText = language;
                }
            });
        }
    }

    function addLanguageSearchListener() {
        const languages_search_input = document.querySelector('.screen .screen-body .side-panel .languages-slide-in-panel .languages-search-input input');
        if(languages_search_input) {
            languages_search_input.addEventListener('keyup', function (event) {
                const keyword = this.value.toLowerCase();
                const lis = document.querySelectorAll('.screen .screen-body .side-panel .languages-slide-in-panel ul li');
                for(let i = 0; i < lis.length; ++i) {
                    const li = lis[i];
                    const p = li.querySelector('p');
                    const p_text = p.innerText.toLowerCase();
                    if(!keyword) {
                        li.style.display = '';
                    } else {
                        if(p_text.indexOf(keyword) > -1 || (li.className && li.className.indexOf('active') > -1)) {
                            li.style.display = '';
                        } else {
                            li.style.display = 'none';
                        }
                    }
                }
            });
        }
    }

    function addPanelChangeListener() {
        const panel_openers = document.querySelectorAll('li[data-target="panel"]');
        for(let i = 0; i < panel_openers.length; ++i) {
            const panel_opener = panel_openers[i];
            panel_opener.addEventListener('click', function (event) {
                const panel = this.dataset.panel;
                const main_panels = document.querySelectorAll('.main-panel');
                const target_panel = document.querySelector('.main-panel[data-panel="' + panel + '"]');
                for(let j = 0; j < main_panels.length; ++j) {
                    const main_panel = main_panels[j];
                    main_panel.className = main_panel.className.replaceAll('active', '');
                }
                target_panel.className += ' active';
                const was_opened = this.className.indexOf('active') > -1;
                for(let j = 0; j < panel_openers.length; ++j) {
                    const panel_opener = panel_openers[j];
                    panel_opener.className = panel_opener.className.replaceAll('active', '');
                }
                this.className += ' active';
                if(was_opened && panel != 'settings') {
                    if(this.className.indexOf('expanded') > -1) {
                        this.className = this.className.replaceAll('expanded', '');
                    } else {
                        for(let j = 0; j < panel_openers.length; ++j) {
                            const _panel_opener = panel_openers[j];
                            _panel_opener.className = _panel_opener.className.replaceAll('expanded', '');
                        }
                        this.className += ' expanded';
                    }
                }
            });
        }
    }

    function addHeaderPrimaryMenuListener() {
        const primary_lis = document.querySelectorAll('.header-menu-primary li');
        for(let i = 0; i < primary_lis.length; ++i) {
            const primary_li = primary_lis[i];
            primary_li.addEventListener('click', function (event) {
                if(this.className.indexOf('active') > -1) {
                    this.className = this.className.replaceAll('active', ''); 
                } else {
                    this.className += ' active';
                }
            });
        }
    }
</script>
