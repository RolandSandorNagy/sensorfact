<style>
    :root {
        --colour-white: #ffffff;
        --colour-1: #c3ccd1;
        --colour-2: #e2fffe;
        --colour-3: #5656e9;
        --colour-4: #ffedf0;
        --colour-5: #ffd2d2;
        --colour-6: #9b4d4d;
        --colour-7: #6d6d6d;
        --colour-8: #d6d6d6;

        --side-panel-width: 280px;
        --logo-width: 200px;
        --logo-height: 40px;
    }

    * {--sb-track-color: var(--colour-white); --sb-thumb-color: var(--colour-1); --sb-size: 6px; margin: 0; padding: 0;}
    *::-webkit-scrollbar { width: var(--sb-size);}
    *::-webkit-scrollbar-track { background: var(--sb-track-color); border-radius: 6px;}
    *::-webkit-scrollbar-thumb { background: var(--sb-thumb-color); border-radius: 6px;}
    @supports not selector(::-webkit-scrollbar) {
        * {scrollbar-color: var(--sb-thumb-color) var(--sb-track-color);}
    }

    .screen {height: 100vh; overflow: hidden; font-family: sans-serif; letter-spacing: 0px;}

    .screen .screen-header {height: 60px; width: 100%; background: black; color: white; display: flex; align-items: center; justify-content: space-between; padding: 10px 20px; box-sizing: border-box;}
    .screen .screen-header .screen-header-left {display: flex; align-items: center; justify-content: space-between; height: 100%; gap: 12px;} 
    .screen .screen-header .screen-header-right {display: flex; align-items: center; justify-content: space-between; height: 100%; gap: 12px;} 
    .screen .screen-header img {width: var(--logo-width); height: var(--logo-height); object-fit: contain;}
    .screen .screen-header .header-menu-primary {display: flex; height: 100%; padding: 0; margin: 0; list-style: none;}
    .screen .screen-header .header-menu-primary li {display: flex; gap: 6px; align-items: center; justify-content: flex-start; padding: 6px; cursor: pointer; border-radius: 6px;}
    .screen .screen-header .header-menu-primary li.active {background: blue;}
    .screen .screen-header .header-menu-primary li svg {opacity: 1;}
    .screen .screen-header .header-menu-primary li p {opacity: 1;}        
    .screen .screen-header .header-menu-secondary {display: flex; height: 100%; gap: 6px; padding: 0; margin: 0; list-style: none;}
    .screen .screen-header .header-menu-secondary li {display: flex; gap: 6px; align-items: center; justify-content: flex-start; padding: 6px 12px; cursor: pointer; border: 1px solid white; border-radius: 6px;}
    .screen .screen-header .header-menu-secondary li:hover {}
    .screen .screen-header .header-menu-secondary li.green-btn {background: green; border: none;}
    .screen .screen-header .header-menu-secondary li svg {opacity: 1;}
    .screen .screen-header .header-menu-secondary li p {opacity: 1;}
    .screen .screen-header .header-menu-tertiary {display: flex; height: 100%; padding: 0; margin: 0; list-style: none;}
    .screen .screen-header .header-menu-tertiary li {display: flex; align-items: center; justify-content: flex-start; padding: 6px; cursor: pointer;}
    .screen .screen-header .header-menu-tertiary li svg {opacity: 1;}
    
    .screen .screen-body {display: flex; height: calc(100% - 60px);}
    .screen .screen-body .side-panel {width: var(--side-panel-width); padding: 10px 20px; display: flex; flex-flow: column; justify-content: space-between;}
    .screen .screen-body .side-panel .main-menu {margin: 0; padding: 0; list-style: none; display: flex; flex-flow: column; gap: 4px; overflow: auto; overflow-x: hidden;}

    .screen .screen-body .side-panel .main-menu li {display: flex; flex-flow: column; width: 100%; position: relative;}
    .screen .screen-body .side-panel .main-menu li .menu-item-wrapper {display: flex; width: 100%; align-items: center; justify-content: flex-start; gap: 12px; padding: 12px; border-radius: 6px; cursor: pointer; position: relative; border-radius: 6px; cursor: pointer; box-sizing: border-box;}
    .screen .screen-body .side-panel .main-menu li .menu-item-wrapper:hover {background: var(--colour-2);}
    .screen .screen-body .side-panel .main-menu li.active .menu-item-wrapper {background: var(--colour-1); color: var(--colour-3);}
    .screen .screen-body .side-panel .main-menu li ul {padding: 0; margin: 0; list-style: none; height: 0px; overflow: hidden; transition: 0.2s all ease-in-out;}
    .screen .screen-body .side-panel .main-menu li.expanded ul {height: 170px;}
    .screen .screen-body .side-panel .main-menu li ul li {align-items: baseline; justify-content: flex-start; gap: 12px; padding: 12px; padding-left: 48px;}

    .screen .screen-body .side-panel .main-menu li svg {}
    .screen .screen-body .side-panel .main-menu li p {padding: 0; margin: 0; max-width: calc(100% - 24px - 12px - 24px - 12px - 12px);}
    .screen .screen-body .side-panel .main-menu li span {display: none; position: absolute; right: 12px; top: 12px; background: var(--colour-4); width: 24px; height: 24px; align-items: center; justify-content: center; text-align: center; border-radius: 50%; border: 1px solid var(--colour-5); color: var(--colour-6); font-weight: 600; font-size: 12px;}
    .screen .screen-body .side-panel .main-menu li span.active {display: flex;}
    .screen .screen-body .side-panel .bottom-menu {margin: 0; padding: 0; list-style: none; display: flex; flex-flow: column; gap: 4px; border-top: 1px solid var(--colour-1); padding-top: 6px;}
    .screen .screen-body .side-panel .bottom-menu li {display: flex; width: 100%; align-items: center; justify-content: flex-start; gap: 6px; padding: 12px; border-radius: 6px; cursor: pointer; position: relative; box-sizing: border-box;}
    .screen .screen-body .side-panel .bottom-menu li:hover {background: var(--colour-2);}
    .screen .screen-body .side-panel .bottom-menu li.active {background: var(--colour-1);}
    .screen .screen-body .side-panel .bottom-menu li svg {pointer-events: none;}
    .screen .screen-body .side-panel .bottom-menu li p {padding: 0; margin: 0; max-width: calc(100% - 24px - 12px - 24px - 12px - 12px); pointer-events: none;}
    .screen .screen-body .side-panel .bottom-menu li span.chevron-down {position: absolute; right: 12px; top: 18px; width: 8px; height: 8px; border-left: 2px solid var(--colour-7); border-bottom: 2px solid var(--colour-7); transform: rotate(-45deg);}
    .screen .screen-body .side-panel .bottom-menu li.language-button.active span.chevron-down {transform: rotate(135deg); top: 24px;}

    .screen .screen-body .side-panel .languages-slide-in-panel {position: absolute; top: 500%; height: 250px; overflow: auto; width: calc(100% - 20px); overflow-x: hidden; border: 1px solid var(--colour-8); border-radius: 6px; transition: 0.2s all ease-in-out; background: white; left: 0; width: 100%; box-sizing: border-box; -webkit-box-shadow: 0px 12px 6px -6px rgba(204,204,204,1); -moz-box-shadow: 0px 12px 6px -6px rgba(204,204,204,1); box-shadow: 0px 12px 6px -6px rgba(204,204,204,1);} 
    .screen .screen-body .side-panel .language-button.active .languages-slide-in-panel {top: calc(-248px - 12px);}
    .screen .screen-body .side-panel .languages-slide-in-panel .languages-search-input {position: relative; padding: 12px 6px; padding-bottom: 0; width: 100%; box-sizing: border-box;}
    .screen .screen-body .side-panel .languages-slide-in-panel .languages-search-input svg {position: absolute; left: 22px; top: 22px;}
    .screen .screen-body .side-panel .languages-slide-in-panel .languages-search-input input {margin: 0; width: 100%; border-radius: 6px; border: 1px solid black; padding: 12px 6px; padding-left: 46px; box-sizing: border-box; font-size: 14px;}
    .screen .screen-body .side-panel .languages-slide-in-panel ul {padding: 0 6px; margin: 0; list-style: none; display: flex; gap: 4px; flex-flow: column;}
    .screen .screen-body .side-panel .languages-slide-in-panel ul li {}
    .screen .screen-body .side-panel .languages-slide-in-panel ul li svg {}
    .screen .screen-body .side-panel .languages-slide-in-panel ul li p {}
    .screen .screen-body .side-panel .languages-slide-in-panel ul li span {}
    .screen .screen-body .side-panel .languages-slide-in-panel ul li.active span {position: absolute; right: 12px; top: 18px; width: 13px; height: 6px; border-left: 2px solid var(--colour-3); border-bottom: 2px solid var(--colour-3); transform: rotate(-45deg);}
    .screen .screen-body .side-panel .languages-slide-in-panel ul li span svg {}

    .screen .screen-body .main-panel {display: none; width: calc(100% - var(--side-panel-width)); background: var(--colour-1); padding: 30px 20px;}
    .screen .screen-body .main-panel.active {display: block;}

</style>
