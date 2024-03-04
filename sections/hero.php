<div class="section" id="hero">
    <div class="overlay">
        <div class="big-title">
            <h1>Siine</h1>
            <h1>Events</h1>
        </div>

        <div class="title">
            <h4 dir="<?=$event['event_name']['dir'];?>"><?=$event['event_name']['text'];?></h4>
        </div>

        <div class="more">
            <!-- <a dir="<?=$event['event_cta']['dir'];?>" href="#" class="cta"><?=$event['event_cta']['text'];?></a> -->
            <h3 dir="<?=$event['event_date']['dir'];?>"><?=$event['event_date']['text'];?>
            <br><?=$event['event_place']['text'];?></h3>

        </div>


        <div class="marquee">
            <p dir="<?=$event['marquee']['dir'];?>">
                <?= $event['marquee']['text']; ?>
            </p>
        </div>
    </div>
</div>