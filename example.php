<?php $accordion_name = "faqs"; ?>

<div class="accordion faqs" data-block="<?php echo $accordion_name; ?>">

        <div class="<?php echo $accordion_name; ?>__item js-accordion--open">
            <div class="<?php echo $accordion_name; ?>__title js-accordion--open">
                <h2>Question 1?</h2>
            </div>
            <div class="<?php echo $accordion_name; ?>__content js-accordion--open">
                <div>
                    <p>Answer 1 lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.</p>
                    <p>Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                </div>
            </div>
        </div>
        
        <div class="<?php echo $accordion_name; ?>__item">
            <div class="<?php echo $accordion_name; ?>__title">
                <h2>Question 2?</h2>
            </div>
            <div class="<?php echo $accordion_name; ?>__content">
                <div>
                    <p>Answer 2 lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.</p>
                    <p>Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                </div>
            </div>
        </div>

</div>

<script>
$('.accordion').accordion();
</script>
