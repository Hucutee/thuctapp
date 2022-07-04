<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./phongban.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <style>
    * {
      margin: 0;
      font-family: sans-serif;
    }
  </style>
  <title>Phòng ban</title>
</head>

<body>
  <div class="header">
    <div class="header__container">
      <a href="" class="header__name">COMPANY</a>
      <div class="header__account">
        <h4 class="account__name">Nguyen Van A</h4>
        <div class="avatar__border">
          <i class="fa-regular fa-user avatar_icon"></i>
        </div>
      </div>
    </div>
    <div class="header__navbar" id="menu-btn">
      <i class="fa-solid fa-bars navbar__item"></i>
      <span class="navbar__title navbar__item">Danh mục <i class="fa-solid fa-chevron-right navbar__item"></i> <a
          href="#" class="link__page navbar__item">Phòng ban</a></span>
    </div>
  </div>
  <div class="container">
    <div class="menu">
      <h2 class="menu__title">Danh sách phòng ban</h2>
      <div class="search">
        <input type="text" class="search__input search__item" name="search" placeholder="Tên phòng ban" id="">
        <i class="fa-solid fa-magnifying-glass btn search__item"></i>
        <i class="fa-solid fa-ellipsis-vertical btn search__item"></i>
      </div>

    </div>
    <div class="table__container">
      <table class="table">
        <tr class="table__header">
          <th class="header__title">STT</th>
          <th class="header__title">Mã phòng ban</th>
          <th class="header__title">Tên phòng ban</th>
          <th class="header__title">Mô tả phòng ban</th>

        </tr>
        <tr>
          <td>1</td>
          <td>NS</td>
          <td>NS01</td>
          <td>aa</td>

        </tr>

      </table>

    </div>

  </div>
  <div class="left-menu" id="menu-left">
    <div class="menu__header" id="menu-left-btn">
      <i class="fa-solid fa-bars"></i>
      <span class="header__title">Danh mục</span>
    </div>
    <div class="account-status">
      <span class="name-account">Nguyen Van A</span>
      <span class="status">Online</span>
    </div>
    <ul class="menu__list">
    <li class="list__item">
        <div class="item__left">
          <i class="fa-solid fa-user avatar_icon"></i>
          <a href="#" class="left__title">Thông tin cá nhân</a>
        </div>
        <i class="fa-solid fa-chevron-right item__right"></i>
      </li>

      <li class="list__item">
        <div class="item__left">
          <i class="fa-solid fa-address-card"></i>
          <a href="#" class="left__title">Nhân viên</a>
        </div>
        <i class="fa-solid fa-chevron-right item__right"></i>
      </li>
      <li class="list__item">
        <div class="item__left">
          <i class="fa-solid fa-square-check"></i>
          <a href="#" class="left__title">Điểm danh</a>
        </div>
        <i class="fa-solid fa-chevron-right item__right"></i>
      </li>
      <li class="list__item">
        <div class="item__left">
          <i class="fa-solid fa-building"></i>
          <a href="#" class="left__title">Phòng ban</a>
        </div>
        <i class="fa-solid fa-chevron-right item__right"></i>
      </li>

      <li class="list__item">
        <div class="item__left">
          <i class="fa-solid fa-bullseye"></i>
          <a href="#" class="left__title">KPI</a>
        </div>
        <i class="fa-solid fa-chevron-right item__right"></i>
      </li>
      <li class="list__item">
        <div class="item__left">
          <i class="fa-solid fa-money-check-dollar"></i>
          <a href="#" class="left__title">Lương</a>
        </div>
        <i class="fa-solid fa-chevron-right item__right"></i>
      </li>

      <li class="list__item">
        <div class="item__left">
          <i class="fa-solid fa-ranking-star"></i>
          <a href="#" class="left__title">Khen thưởng - Kỷ luật</a>
        </div>
        <i class="fa-solid fa-chevron-right item__right"></i>
      </li>
      <li class="list__item">
        <div class="item__left">
          <i class="fa-solid fa-right-from-bracket"></i>
          <a href="#" class="left__title">Đăng xuất</a>
        </div>
      </li>
    </ul>
  </div>
  <script src="./nv-phongban.js"></script>
</body>

</html>