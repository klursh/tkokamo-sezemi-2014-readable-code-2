- 開発言語
 php

- プログラムの実行

spec5:
	$php main.php <INPUT FILE>
	INPUT FILEはレシピの保存してあるファイル。

INPUT FILEの作成:
	一行に1レシピを書き、適当なファイル名で保存
- 方針

基本的に細かい機能はRecipe.php 内に記述する。
各メソッドの再利用性を重視。

Recipeクラスの呼び出しは現在spec3.php
ここには、あまり細かい処理を書かない