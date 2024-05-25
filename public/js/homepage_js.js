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
