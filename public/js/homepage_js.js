  //文字が横からスライドして表示する
  window.addEventListener('load', function() {
    const bannerText = document.getElementById('banner-text');
    bannerText.classList.add('show');
  });

  window.addEventListener('load', function() {
    const adsItems = document.querySelectorAll('.ads-item');
    adsItems.forEach(function(adsItem) {
        adsItem.classList.add('show');
      });
});


    //リストのマーカーをクリックしたら、背景が変わるJS
    const backgroundImages = [
      '/images/banner-bg.jpg',
      '/images/discount-img.jpg'
    ];

    const listItems = document.querySelectorAll('#banner-button li');
    listItems.forEach((item, index) => {
      item.addEventListener('click', () => {
        changeBackgroundImage(backgroundImages[index]);
      });
    });
  
    // 背景背景を変更する関数
    function changeBackgroundImage(imageUrl) {
      document.getElementById('banner').style.backgroundImage = `url('${imageUrl}')`;
    }

    //自動で背景が変わる関数
    function autoChangeBackgroundImage() {
      const randomIndex = Math.floor(Math.random() * backgroundImages.length);
      const imageUrl = backgroundImages[randomIndex];
      document.getElementById('banner').style.backgroundImage = `url('${imageUrl}')`;

      //自動で背景が変わると、マーカーの色も変わる
      const bannerButtons = document.querySelectorAll('#banner-button li');
    bannerButtons.forEach((button, index) => {
      button.classList.remove('marker-clicked');
      if (index === randomIndex) {
        button.classList.add('marker-clicked');
      }
    });
    }

    document.getElementById('banner-button').addEventListener('click', function(event) {
      // クリックされた要素がリスト項目（li）かどうかをチェック
      if (event.target.tagName === 'LI') {
        // すべてのリスト項目から marker-clicked クラスを削除
        const listItems = document.querySelectorAll('#banner-button li');
        listItems.forEach(function(item) {
          item.classList.remove('marker-clicked');
        });
    
        // クリックされた要素に marker-clicked クラスを追加
        event.target.classList.add('marker-clicked');
      }
    });

    setInterval(autoChangeBackgroundImage, 3000);

    //stripeのjavascript
    var stripe = Stripe(stripeKey);
    var elements = stripe.elements();
    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };
    var card = elements.create('card', {hidePostalCode: true,
        style: style});
    card.mount('#card-element');
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });
    const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;
    cardButton.addEventListener('click', async (e) => {
      e.preventDefault();//prevent to submit the form through html, and submit my js function-> paymentMethodHandler
        console.log("attempting");
        const { setupIntent, error } = await stripe.confirmCardSetup(
            clientSecret, {
                payment_method: {
                    card: card,
                    billing_details: { name: cardHolderName.value }
                }
            }
            );
        if (error) {
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = error.message;
        } else {
            paymentMethodHandler(setupIntent.payment_method);
        }
    });
    function paymentMethodHandler(payment_method) {
        var form = document.getElementById('subscribe-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'payment_method');
        hiddenInput.setAttribute('value', payment_method);
        form.appendChild(hiddenInput);
        form.submit();
    }
