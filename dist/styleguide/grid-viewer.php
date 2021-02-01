<div class="grid-viewer">
    <div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<style>
    .grid-viewer {
        box-sizing: border-box;
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 10000;
        padding: 0 var(--ctr-margin);
        pointer-events: none;
    }
    .grid-viewer>div {
        box-sizing: border-box;
        position: relative;
        max-width: var(--ctr-width);
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        grid-gap: var(--gap);
        height: 100vh;
    }
    .grid-viewer>div:before, .grid-viewer>div:after{
        content:"";
        width: var(--ctr-margin);
        height: 100%;
        display:block;
        position: absolute;
        background: rgba(0, 0, 255, 0.05);
    }
    .grid-viewer>div:before {
        right: 100%;
    }
    .grid-viewer>div:after {
        left: 100%;
    }
    .grid-viewer>div div{
        background: rgba(255, 0, 140, 0.05);
        height: 100%;
    }
</style>