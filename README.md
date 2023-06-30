# tsugeno_kadai07_php2

DB内では男性、女性なのに、valueを男、女としてしまったばっかりに、ずーっとPMAに登録されず、なんらかphpの異常かネットワークエラーなのだろうと１日悶々と溶かしておりましたが、こすげさんに救っていただきました。
工夫した点はないですが、G'sの皆さんのP2Pのありがたみを感じた回でした。

間に合いませんでしたが、生年月日から年齢を自動算出する関数を入れたかったです。

<input type="radio" id="male" name="sex" value="男">
                <label for="male">男</label>
                <input type="radio" id="female" name="sex" value="女">
                <label for="female">女</label>
↓
<input type="radio" id="male" name="sex" value="男性">
                <label for="male">男</label>
                <input type="radio" id="female" name="sex" value="女性">
                <label for="female">女</label>
