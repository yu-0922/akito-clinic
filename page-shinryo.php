<!DOCTYPE html>
<html lang ="ja">
  <head>
    <?php get_header(); ?>
  </head>
  <body>

  <?php get_template_part('includes/header'); ?>
    <div class="main">
    <h1 class="main-title">診療案内</h1>
      <div class="shinryo-contents">
        <h3 class="subject-area">診療時間</h3>
          <table class="time-table">
            <thead>
              <tr>
                <th></th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>8:30~12:00</th>
                <td>○</td>
                <td>○</td>
                <td>○</td>
                <td>○</td>
                <td>○</td>
                <td>○</td>
              </tr> 
              <tr>
                <th>15:00~17:00</th>
                <td>○</td>
                <td>○</td>
                <td>○</td>
                <td>-</td>
                <td>○</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
          <div class="holiday">※日曜・祝日は休み</div>
        <h3 class="subject-area">診療科</h3>
          <h4 class="subject"><i class="fas fa-hospital-user mr"></i>内科</h4>
            <p class="disease">高血圧、高脂血症、糖尿病、高尿酸血症、COPD(慢性閉塞性肺疾患)、睡眠時無呼吸症候群、花粉症、口内炎、扁桃炎、副鼻腔炎、痛風、自律神経失調症、心身症、脱毛症、ED、メニエール病、潰瘍性大腸炎、クローン病など</p>
          <h4 class="subject"><i class="fas fa-hospital-user mr"></i>胃腸科</h4>
            <p class="disease">胃炎、胃潰瘍、十二指腸潰瘍、逆流性食道炎、胃腸炎、過敏性腸症候群、炎症性腸疾患、腸内洗浄、下痢・便秘などの腸疾患など</p>
        <h3 class="subject-area">検査・診療内容</h3>
        <ul>
          <li class="disease">胸部・腹部X線検査</li>
          <li class="disease">超音波検査（腹部エコー）</li>
          <li class="disease">骨塩定量検査（骨密度）</li>
          <li class="disease">心電図</li>
          <li class="disease">定期的な採血（糖尿病、高脂血症、高尿酸血症など）</li>
          <li class="disease">ノロウイルス検査</li>
          <li class="disease">CAVI（動脈硬化検査）</li>
          <li class="disease">予防接種（肺炎球菌、日本脳炎、麻疹・風疹混合、インフルエンザ等各種ワクチン）</li>
          <li class="disease">ニコチン治療（禁煙治療）</li>
          <li class="disease">AGA治療（薄毛治療）</li>
        </ul>
      </div>
    </div>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
  </body>
</html>