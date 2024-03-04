<div class="section" id="presentation">
    <h4 dir="<?=$event['text_1']['dir'];?>"><?=$event['text_1']['text'];?></h4>
    <div class="video">
        <video autoplay muted playsinline loop>
            <source src="../assets/presentation.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="shape-bg-1 triangle-shadow shape-bg-1-shadow"></div>
    <div class="shape-bg-1 triangle"></div>
    <div class="shape-bg-2 triangle-shadow shape-bg-2-shadow"></div>
    <div class="shape-bg-2 triangle"></div>

    <div id="about" dir="<?=$event['about']['dir'];?>">
        <?=$event['about']['text'];?>
        <div class="download">
            <a>
                <img src="./social/googleplay.png" />
            </a>
            <a class="website" href="https://siinedz.com" target="_blank">
                <?=$event['visit']['text'];?>
            </a>
        </div>
    </div>
</div>