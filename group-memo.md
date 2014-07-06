# 良い所

##  複雑回避
- before: https://github.com/klursh/klursh-sezemi-2014-readable-code-2/blob/master/index.php
  * 制御文で何をやっているのかわからなかった。

- after:  https://github.com/tkokamo/klursh-sezemi-2014-readable-code-2/blob/master/index.php
  * 関数の返り値をそのまま利用することを避けて、一度意味のある変数に落としてから使う。  
  例えば、制御文で何をやっているのかがわからなくなるのを避ける。



##  ミニマムコメント
- https://github.com/klursh/klursh-sezemi-2014-readable-code-2/blob/master/index.php
  * それぞれの処理の記述前に、おおよそどのようなことをしたいのかが書いてある。  
  最初は細かい所をみないので、だいたい何をしたいかわかると以降のコードリーデイングに役立った。


##  その他
パラメータのチェックで、エラーメッセージがそのままコメントのようになっていたため、  
そこでどんなチェックをしているのかがひと目で分かった。

printRecipeWithIdというメソッド名が、それだけでどんな表示方法なのかわかった。

クラス名と中身が一致している
 -自分がしてなかったので、「あ、こっちのほうがよい」となりました。
 -(私):Recipeクラスなのに、複数のレシピを扱っていた

似た処理をまとめていた。
変数のスコープが縮まる感じがするので
