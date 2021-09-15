<!DOCTYPE html>
<html lang ="ja">
  <head>
    <?php get_header(); ?>
  </head>
  <body>

  <?php get_template_part('includes/header'); ?>
    <div class="main">
      <div class="main-title">
        <h1>診療案内</h1>
      </div>
      <div class="shinryo-contents">
        <h3 class="subject-area">診療科</h3>
          <h4 class="subject"><i class="fas fa-hospital-user mr"></i>内科</h4>
            <p class="disease">高血圧・高脂血症・糖尿病・高尿酸血症などの生活習慣病・循環器・消化器・呼吸器・自律神経失調症など</p>
          <h4 class="subject"><i class="fas fa-hospital-user mr"></i>胃腸科</h4>
            <p class="disease">胃炎・胃潰瘍・十二指腸潰瘍・逆流性食道炎・胃腸炎・下痢・便秘などの腸疾患など</p>
          <h4 class="subject"><i class="fas fa-hospital-user mr"></i>小児科</h4>
            <p class="disease">胃腸炎（嘔吐下痢症・便秘など）・風邪・喘息など</p>
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
                <th>13:00~17:00</th>
                <td>○</td>
                <td>○</td>
                <td>○</td>
                <td>○</td>
                <td>○</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
          <div class="holiday">※日曜・祝日は休み</div>
        <h3 class="subject-area">検査・診療内容</h3>
        <ul>
          <li class="disease">胸部・腹部X線検査</li>
          <li class="disease">超音波検査（腹部エコー）</li>
          <li class="disease">骨塩定量検査（骨密度）</li>
          <li class="disease">心電図</li>
          <li class="disease">定期的な採血（糖尿病、高脂血症、高尿酸血症など）</li>
          <li class="disease">ノロウイルス検査</li>
          <li class="disease">CAVI（動脈硬化検査）</li>
          <li class="disease">CPAP（在宅持続腸圧呼吸療法）</li>
          <li class="disease">予防接種（肺炎球菌、日本脳炎、麻疹・風疹混合、各種ワクチン）</li>
          <li class="disease">ニコチン治療（禁煙治療）</li>
          <li class="disease">AGA治療（薄毛治療）</li>
        </ul>
      </div>
    </div>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
  </body>
</html>