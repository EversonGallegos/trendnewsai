<div class="container">
  <div class="main header">
    <div class="header--logo">
      <h1>Trend News AI</h1>
    </div>
    <div class="header--description">
      <?php if (is_home()): ?>
      <p>Latest trends</p>
      <?php elseif (is_single()): ?>
        <div class='back-home'>
          <a href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
            fill="#000000" viewBox="0 0 256 256">
              <rect width="256" height="256" fill="none"></rect>
              <line x1="216" y1="128" x2="40" y2="128" fill="none" stroke="#000000"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
              <polyline points="112 56 40 128 112 200" fill="none" stroke="#000000"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
          </svg>
          </a>
          <p>Return</p>
        </div>
      <?php endif; ?>
    </div>
    <div class="header--search">
      <input type="search" name="search" placeholder="Search">
    </div>
  </div>
  <div style="width: 100%; height: 18px"></div>
</div>