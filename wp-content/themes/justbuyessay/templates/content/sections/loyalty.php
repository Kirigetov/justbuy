<!--  begin loyalty  -->

<div class="simple-carts-wrap">
    <div class="simple-carts simple-carts_loyalty">

        <?php
        $data = array(
            array(
                '1',
                'You get a bonus balance',
                'When you become a customer, we create a virtual money account - your personal Bonus Balance.
                 You can check it in your password-protected Customer Area. It is private and you are the only 
                 person who can access it.'
            ),
            array(
                '2',
                'You receive bonuses',
                'So, where does the money on your Balance come from? When you order your first paper, 10% of 
                its cost goes to your Balance. Your second purchase and each subsequent one brings you 5% to
                 the Bonus Balance.'
            ),
            array(
                '3',
                'You pay for papers with bonuses',
                'Right after your first purchase, you’ll have money on your Balance - let’s say, $5. To use 
                the Bonus money, you just need to log in and fill out the field “Use $ from my Balance” with 
                the amount you want to spend. It should not though exceed the amount available on the Balance.'
            )
        );

        foreach ($data as $item) : ?>
            <div class="simple-carts__item">
                <div class="simple-cart">
                    <div class="simple-cart__col">
                        <div class="simple-cart__img simple-cart__img_<?php echo $item[0]; ?>"></div>
                    </div>

                    <div class="simple-cart__col">
                        <div class="simple-cart__body">
                            <div class="simple-cart__title"><?php echo $item[1]; ?></div>
                            <div class="simple-cart__text"><?php echo $item[2]; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!--  end loyalty  -->