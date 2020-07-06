<?php if($infoWeather):?>
        <ul>
            <?php foreach ($infoWeather as $key => $item): ?>
            <li>
                <p>Ngay : <?php $item['dt_txt']; ?></p>
                <p>Thong tin thoi tiet : <?php $item['dt_txt']; ?></p>
                <div  class="info-weather">
                    <p>Nhiet do: <?php $item['main']['temp']; ?></p>
                    <p>Do am: <?php $item['main']['humidity']; ?></p>
                    <p>Mieu ta: <?php $item['weather'][0]['description']; ?></p>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
<?php else: ?>
    <h5 class="text-center">No Data</h5>
<?php  endif; ?>
