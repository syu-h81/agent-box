<?php $title="求職者管理_求職者一覧_フィルター適用後" ?>
<?php session_start() ?>
<?php require_once dirname(__FILE__).'/header.php'; ?>
  <main class="main">
    <div class="main-container">
      <div class="home-inner">
        <div class="home-search__inner">
          <div class="home-search-box">
            <div class="home-search-box__search">
              <input type="search" placeholder="株式会社ANCa内を検索">
            </div>
            <a href="message-list.php" class="home-search-box__msg">
              <img src="assets/images/msg-icon.png" alt="">
            </a>        
          </div>
          <div class="home-search-box__admin">
            <span class="home-search-box__admin__title">管理者</span>
            <div class="home-search-box__admin__name">山田 太郎</div>
          </div>
          <div class="home-search-box__admin__popup__inner">
            <div class="home-search-box__admin__popup__content">
              <div class="home-search-box__admin__popup__content__info">
                <span class="home-search-box__admin__popup__content__info__title">管理者</span>
                <div class="home-search-box__admin__popup__content__info__name">山田 太郎</div>
                <div class="home-search-box__admin__popup__content__info__email">yamada@gmail.com</div>
              </div>
              <div class="home-search-box__admin__popup__content__btn">
                <div class="home-search-box__admin__popup__content__account__btn">
                  <img src="assets/images/account-setting-icon.png" alt="">
                  <a href="" class="home-search-box__admin__popup__content__account__btn__text">アカウント設定</a>
                </div>
                <div class="home-search-box__admin__popup__content__logout__btn">
                  <img src="assets/images/logout-icon.png" alt="">
                  <a href="" class="home-search-box__admin__popup__content__logout__btn__text">ログアウト</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="seeker-list__inner seeker-inner">
          <div class="seeker-list__block seeker-block">
            <div class="seeker-list__title__inner seeker-title-inner">
              <h2>求職者一覧</h2>
            </div>
            <div class="seeker-list-content__inner seeker-content-inner">
              <div class="seeker-list-content-register__inner">
                <div class="seeker-list-content-register__btn">
                  <button type="button">求職者登録</button>
                  <span>+</span>
                </div>
                <div id="filter" class="seeker-list-content-register__filter__icon">
                  <img src="assets/images/filter.png" alt="">
                </div>
              </div>
              <!--===== 求職者一覧フィルター =====-->
              <div class="seeker-list-content-filter__inner">
                <div class="seeker-list-content-filter__block">
                  <form action="seeker-list-apply.php" method="post" class="seeker-list-content-filter">
                    <div id="close" class="seeker-list-content-filter__close">
                      <span></span>
                      <span></span>
                    </div>
                    <div class="seeker-list-content-filter__create">
                      <div class="seeker-list-content-filter__create__label seeker-list-content-filter-label">
                        <label for="">作成日</label>
                      </div>
                      <div class="seeker-list-content-filter__create__input seeker-list-content-filter-input-date">
                        <input type="text" placeholder="0000/00/00 - 0000/00/00">
                        <span>ー</span>
                        <input type="text" placeholder="0000/00/00 - 0000/00/00">
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__ca">
                      <div class="seeker-list-content-filter__ca__label seeker-list-content-filter-label">
                        <label for="">担当CA</label>
                      </div>
                      <div class="seeker-list-content-filter__ca__input">
                        <select name="charge-ca" id="" onchange="changeColor(this)">
                          <option value="選択してください" selected>選択してください</option>
                          <option value="松井良太">松井良太</option>
                          <option value="松井良太">松井良太</option>
                          <option value=""></option>
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__gender">
                      <div class="seeker-list-content-filter__gender__label">
                        <label>性別</label>
                      </div>
                      <div class="seeker-list-content-filter__gender__input">
                        <label class="seeker-list-content-filter__gender__input__radio">
                          <input type="radio" name="gender">
                          <span>男性</span>
                        </label>
                        <label class="seeker-list-content-filter__gender__input__radio">
                          <input type="radio" name="gender">
                          <span>女性</span>
                        </label>
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__school">
                      <div class="seeker-list-content-filter__school__label">
                        <label for="">学校名</label>
                      </div>
                      <div class="seeker-list-content-filter__school__input">
                        <select name="charge-school" id="" >
                          <option value="選択してください" selected>選択してください</option>
                          <option value=""></option>
                          <option value=""></option>
                          <option value=""></option>
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__phase">
                      <div class="seeker-list-content-filter__phase__label">
                        <label for="phase">フェーズ</label>
                      </div>
                      <div class="seeker-list-content-filter__phase__input">
                        <label class="seeker-list-content-filter__phase__input__checkbox">
                          <input type="checkbox" name="phase" id="phase-before">
                          <span>支援前</span>
                        </label>
                        <div class="seeker-list-content-filter__phase__input__checkbox">
                          <input type="checkbox" name="phase" id="phase">
                          <span>支援中</span>
                        </div>
                        <div class="seeker-list-content-filter__phase__input__checkbox">
                          <input type="checkbox" name="phase">
                          <span>内定承諾</span>
                        </div>
                        <div class="seeker-list-content-filter__phase__input__checkbox">
                          <input type="checkbox" name="phase">
                          <span>入社済み</span>
                        </div>
                        <div class="seeker-list-content-filter__phase__input__checkbox">
                          <input type="checkbox" name="phase">
                          <span>入社済み</span>
                        </div>
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__type">
                      <div class="seeker-list-content-filter__type__label">
                        <label for="">種別</label>
                      </div>
                      <div class="seeker-list-content-filter__type__input">
                        <div class="seeker-list-content-filter__type__input__radio">
                          <input type="radio" name="type">
                          <span>新卒</span>
                        </div>
                        <div class="seeker-list-content-filter__type__input__radio">
                          <input type="radio" name="type">
                          <span>中途</span>
                        </div>
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__assumption">
                      <div class="seeker-list-content-filter__assumption__label seeker-list-content-filter-label">
                        <label for="">決定想定日</label>
                      </div>
                      <div class="seeker-list-content-filter__assumption__input seeker-list-content-filter-input-date">
                        <input type="text" placeholder="0000/00/00 - 0000/00/00">
                        <span>ー</span>
                        <input type="text" placeholder="0000/00/00 - 0000/00/00">
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__interview">
                      <div class="seeker-list-content-filter__interview__label seeker-list-content-filter-label">
                        <label for="">初回面談日</label>
                      </div>
                      <div class="seeker-list-content-filter__interview__input seeker-list-content-filter-input-date">
                        <input type="text" name="interview-1" placeholder="0000/00/00 - 0000/00/00">
                        <span>ー</span>
                        <input type="text" name="interview-2" placeholder="0000/00/00 - 0000/00/00">
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__setting">
                      <div class="seeker-list-content-filter__setting__label seeker-list-content-filter-label">
                        <label for="">面談設定日</label>
                      </div>
                      <div class="seeker-list-content-filter__setting__input seeker-list-content-filter-input-date">
                        <input type="text" name="setting-1" placeholder="0000/00/00 - 0000/00/00">
                        <span>ー</span>
                        <input type="text" name="setting-2" placeholder="0000/00/00 - 0000/00/00">
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__btn">
                      <button type="button" id="cancel" class="seeker-list-content-filter__btn__cancel">キャンセル</button>
                      <button type="submit" class="seeker-list-content-filter__btn__apply">適用</button>
                    </div>
                  </form>
                </div>
              </div>
              <!--===== 求職者一覧フィルター適用中 =====-->
              <div class="seeker-list-content-apply__inner">
                <div class="seeker-list-content-apply__heading">
                  <span>フィルター適用中：</span>
                </div>
                <div class="seeker-list-content-apply__block">
                  <div class="seeker-list-content-apply__box">
                    <span>フェーズ：</span>
                    <span><?php echo $_POST['phase'] ?></span>
                  </div>
                  <div class="seeker-list-content-apply__box">
                    <span>面談設定日：</span>
                    <span><?php echo $_POST['setting-1'] ?>-<?php echo $_POST['setting-2'] ?></span>
                  </div>
                  <div class="seeker-list-content-apply__box">
                    <span>面談設定日：</span>
                    <span><?php echo $_POST['setting-1'] ?>-<?php echo $_POST['setting-2'] ?></span>
                  </div>
                  <div class="seeker-list-content-apply__box">
                    <span>面談設定日：</span>
                    <span><?php echo $_POST['setting-1'] ?>-<?php echo $_POST['setting-2'] ?></span>
                  </div>
                  <div class="seeker-list-content-apply__box">
                    <span>面談設定日：</span>
                    <span><?php echo $_POST['setting-1'] ?>-<?php echo $_POST['setting-2'] ?></span>
                  </div>
                  <div class="seeker-list-content-apply__box">
                    <span>面談設定日：</span>
                    <span><?php echo $_POST['setting-1'] ?>-<?php echo $_POST['setting-2'] ?></span>
                  </div>
                  <div class="seeker-list-content-apply__box">
                    <span>面談設定日：</span>
                    <span><?php echo $_POST['setting-1'] ?>-<?php echo $_POST['setting-2'] ?></span>
                  </div>
                  <div class="seeker-list-content-apply__box">
                    <span>面談設定日：</span>
                    <span><?php echo $_POST['setting-1'] ?>-<?php echo $_POST['setting-2'] ?></span>
                  </div>
                  <div class="seeker-list-content-apply__box">
                    <span>面談設定日：</span>
                    <span><?php echo $_POST['setting-1'] ?>-<?php echo $_POST['setting-2'] ?></span>
                  </div>
                </div>
              </div>
              <div class="seeker-list-content-table__inner">
                <table class="seeker-list-content-table">
                  <thead class="seeker-list-content-table__thead">
                    <tr class="seeker-list-content-table__tr">
                      <th class="seeker-list-content-table__th">求職者名</th>
                      <th class="seeker-list-content-table__th">担当CA</th>
                      <th class="seeker-list-content-table__th">ステータス</th>
                      <th class="seeker-list-content-table__th">選考数</th>
                      <th class="seeker-list-content-table__th">内定数</th>
                      <th class="seeker-list-content-table__th">コメント欄</th>
                    </tr>
                  </thead>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-before-support"></span>
                      <span>支援前</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-before-support"></span>
                      <span>支援前</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>支援中</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-before-support"></span>
                      <span>支援前</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-withdrawal"></span>
                      <span>離脱</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-before-support"></span>
                      <span>支援前</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-joined"></span>
                      <span>入社済み</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-joined"></span>
                      <span>入社済み</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-withdrawal"></span>
                      <span>離脱</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-before-support"></span>
                      <span>支援前</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-before-support"></span>
                      <span>支援前</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>支援中</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-offer"></span>
                      <span>内定承諾</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-before-support"></span>
                      <span>支援前</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-before-support"></span>
                      <span>支援前</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>支援中</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-offer"></span>
                      <span>内定承諾</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-before-support"></span>
                      <span>支援前</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-before-support"></span>
                      <span>支援前</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>支援中</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-offer"></span>
                      <span>内定承諾</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-before-support"></span>
                      <span>支援前</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-before-support"></span>
                      <span>支援前</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>支援中</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-offer"></span>
                      <span>内定承諾</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="seeker-list-content-table__tr">
                    <td class="seeker-list-content-table__td"><a href="">松井良太</a></td>
                    <td class="seeker-list-content-table__td">後東健太</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__status">
                      <span class="seeker-status seeker-status-before-support"></span>
                      <span>支援前</span>
                    </td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td">00</td>
                    <td class="seeker-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="seeker-list-content-pageList__inner">
                <div class="seeker-list-content-pageList">
                  <a class="seeker-list-content-pageList__prev__link" href="#seeker-prev">＜</a>
                </div>
                <div class="seeker-list-content-pageList">
                  <a class="seeker-list-content-pageList__link" href="#seeker-1">1</a>
                </div>
                <div class="seeker-list-content-pageList">
                  <a class="seeker-list-content-pageList__link" href="#seeker-1">2</a>
                </div>
                <div class="seeker-list-content-pageList">
                  <a class="seeker-list-content-pageList__link" href="#seeker-3">3</a>
                </div>
                <div class="seeker-list-content-pageList">
                  <a class="seeker-list-content-pageList__link" href="#seeker-4">4</a>
                </div>
                <div class="seeker-list-content-pageList">
                  <a class="seeker-list-content-pageList__link" href="#seeker-5">5</a>
                </div>
                <div class="seeker-list-content-pageList">
                  <a class="seeker-list-content-pageList__link" href="">...</a>
                </div>
                <div class="seeker-list-content-pageList">
                  <a class="seeker-list-content-pageList__next__link" href="#seeker-next">＞</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php require_once dirname(__FILE__).'/footer.php'; ?>