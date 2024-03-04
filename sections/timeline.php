<div id="timeline">
  <h1 dir="<?=$event['timeline_title']['dir'];?>"><?=$event['timeline_title']['text'];?></h1>
  </div>
<div class="container" dir="rtl">
 

  <div class="wrapper">
    <ul class="sessions">
        <?php foreach ($event['timeline'] as $item) { ?>
            <li>
                <div class="time"><?=$item['time'];?></div>
                <p><?=$item['text'];?></p>
            </li>
        <?php } ?>
     
    </ul>
        <div class="download">
            <a>
                <img src="./social/googleplay.png" />
            </a>
            <a class="website dark" href="https://siinedz.com" target="_blank">
                <?=$event['visit']['text'];?>
            </a>
        </div>
  </div>
</div> 