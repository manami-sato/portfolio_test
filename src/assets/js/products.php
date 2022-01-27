<?php

  // クロスオリジンを許可する
  header( "Access-Control-Allow-Origin:*" );
  // ヘッダーにコンテンツの種類を設定する
  header( "Content-Type:application/json" );

$products = [
  "web" => [
    [
      "year" => "1",
      "img" => "koka",
      "title" => "紅香 Koka",
      "catchphrase" => "紅茶とお香が出会うカフェ",
      "sort" => [
        "1年前期",
        "個人制作"
      ],
      "text" => "企画・デザイン・コーディングを、初めて担った一番最初の作品です。「カフェ」というテーマの中で「香り」という観点に着目し、紅茶にお香を取り合わせて考えました。茶葉と香りを選ぶフレーバーティーのお店で、それぞれお香として販売している他、香りを組み合わせたオリジナルのお香を注文可能です。",
      "lang" => [
        "HTML5",
        "CSS3",
      ],
      "role" => [
        "企画",
        "LPデザイン",
        "LPコーディング",
      ],
      "link" => [
        [
          "id" => "1",
          "name" => "Web site",
          "url" => "https://manami-sato.github.io/koka/"
        ],
        [
          "id" => "2",
          "name" => "GitHub",
          "url" => "https://github.com/manami-sato/koka/"
        ],
      ],
      "headline" => "初めてのデザイン、初めての企画",
      "chance" => "専門学校入学後初めて制作する「カフェ」というテーマのサイトの中で、「香り」という観点から紅茶をクローズアップしたいと思い、このテーマを選択した。",
      "target" => "分からないことが多かったので、スケジュール通りに作り切ることで精一杯だった。",
      "introspection" => "初めてなことばかりで、作品作りの難しさを実感した。",
      "color" => "#477C3E",
    ],
    [
      "year" => "1",
      "img" => "findfont",
      "title" => "Find font",
      "catchphrase" => "フォントをもっと身近に",
      "sort" => [
        "1年前期",
        "グループ制作",
        // "学内コンテスト入賞"
      ],
      "text" => "文字を撮影して類似したフォントを探せるアプリ。「フォントをもっと身近に」をコンセプトに、フォントに疎いエンジニアをメインターゲットとしています。",
      "lang" => [
        "HTML5",
        "CSS3",
      ],
      "role" => [
        "企画",
        "アプリコーディング",
      ],
      "link" => [
        [
          "id" => "1",
          "name" => "App",
          "url" => "https://manami-sato.github.io/findfont/"
        ],
        [
          "id" => "2",
          "name" => "GitHub",
          "url" => "https://github.com/manami-sato/findfont/"
        ],
      ],
      "headline" => "学内コンテスト入賞も、チームでの作業の難しさを実感",
      "chance" => "Open Hack U 2020に出場するために企画。エンジニアが見栄えの良いデザインを考えようとした際、どのようなフォントを選べば良いか分からず躓いてしまうという意見から、このサービスを発案した。",
      "target" => "入学後初めての作品と同時期に進行していたため、HTMLとCSSでしか書けなかった。コードで遅れを取らないよう、デザインをいただいたあとは迅速にコードを書くことに注意した。",
      "introspection" => "報告・連絡・相談の大切さや、グループ制作の難しさを学んだ。",
      "color" => "#629DBE",
    ],
    [
      "year" => "1",
      "img" => "jishatecho",
      "title" => "寺社手帖",
      "catchphrase" => "“ここにある”神社仏閣で美しい景色をカメラに収めよう。",
      "sort" => [
        "1年後期",
        "個人制作",
      ],
      "text" => "コロナ禍で遠出が難しい状況を踏まえ、近場の神社仏閣に目を向けてもらうためのサービス。新たな参拝客層の獲得のため「美しい写真」を用いてアピールしています。",
      "lang" => [
        "HTML5",
        "CSS3",
        "JavaScript",
      ],
      "role" => [
        "企画",
        "Webサイトデザイン",
        "Webサイトコーディング",
      ],
      "link" => [
        [
          "id" => "1",
          "name" => "Web site",
          "url" => "https://manami-sato.github.io/jishatecho/"
        ],
        [
          "id" => "2",
          "name" => "GitHub",
          "url" => "https://github.com/manami-sato/jishatecho/"
        ],
      ],
      "headline" => "JSを知り改めてエンジニアリングに熱中",
      "chance" => "コロナ禍で遠出が難しい状況が続いており、寺社も影響を受けている。そこで遠出せず、近場の寺社を改めて認識してもらうことで取り戻したいと考えた。写真を大きく使用し、感覚的に「向かいたい」と思ってもらえるようなデザインにした。人気／穴場を分けて表示することで有名な場所か／密を避けて行動するかを絞れるようにした。",
      "target" => "初めてJavaScriptに触れた作品のため、スライドショーやハンバーガーメニューを作った。",
      "introspection" => "写真映えを狙っている層を取り込みたいと考えていたにもかかわらず、機能がシンプルすぎてしまった。企画を考えることが苦手分野なので、重点的に考えて次回生かしていきたい。",
      "color" => "#7F3838",
    ],
    [
      "year" => "1",
      "img" => "pf_ver1",
      "title" => "ポートフォリオ Ver.1",
      "catchphrase" => "",
      "sort" => [
        "1年後期",
        "個人制作",
      ],
      "text" => "このポートフォリオ（Ver.2）の前に制作した、初めてのポートフォリオです。海を意識し、ページが進むにつれて知識が深まっていく様を表現しました。",
      "lang" => [
        "Pug",
        "Sass",
        "JavaScript",
        "jQuery",
        "JSON",
      ],
      "role" => [
        "企画",
        "Webサイトコーディング",
      ],
      "link" => [
        [
          "id" => "1",
          "name" => "Web site",
          "url" => "https://manami-sato.github.io/pf_ver1/"
        ],
        [
          "id" => "2",
          "name" => "GitHub",
          "url" => "https://github.com/manami-sato/pf_ver1/"
        ],
      ],
      "headline" => "動的なデータの変更をJSで初めて実装",
      "chance" => "1年後期の春休みの制作課題としてポートフォリオ（ver1）を制作。",
      "target" => "JSONデータを使ってdata属性を動的に作成、学年ごとの絞り込みの機能を作った。",
      "introspection" => "見づらい配色且つ伝えたいことが伝えきれないデザインになってしまった。",
      "color" => "#5995A8",
    ],
    [
      "year" => "1",
      "img" => "userella",
      "title" => "userella",
      "catchphrase" => "忘れられた傘を必要な人の元へ",
      "sort" => [
        "1年後期",
        "グループ制作",
      ],
      "text" => "駅に忘れられた傘を、急に傘が必要になった人へ貸し出すことで大量廃棄を防ぐサービス。鉄道会社の協力の元置き場を設置することで、SDGsへの貢献を目指しています。",
      "lang" => [
        "HTML5",
        "CSS3",
        "JavaScript",
      ],
      "role" => [
        "企画",
        "LPコーディング",
      ],
      "link" => [
        [
          "id" => "1",
          "name" => "Web site",
          "url" => "https://manami-sato.github.io/userella/"
        ],
        [
          "id" => "2",
          "name" => "GitHub",
          "url" => "https://github.com/manami-sato/userella/"
        ],
      ],
      "headline" => "制作が円滑に進むよう密に進捗を確認し合う",
      "chance" => "駅の忘れ物の一位が傘であり、取りに来る確率も圧倒的に低い。また忘れられた傘が辿る道は廃棄である。そこからもたらされる環境破壊を止められないかと考えた。",
      "target" => "スピードは勿論のこと、より簡潔で分かりやすいコーディングを目指した。JavaScriptを使用することを意識した。",
      "introspection" => "JavaScriptで実装しきれなかった部分や",
      "color" => "#A9C4A7",
    ],
    [
      "year" => "2",
      "img" => "minicomi",
      "title" => "ミニコミ！",
      "catchphrase" => "",
      "sort" => [
        "2年前期",
        "グループ制作",
      ],
      "text" => "8日間でチームを編成しプレゼンまでを行う短期制作の課題。「学生が通学中に楽しめる」をテーマにしています。入学して間もない後輩に教える難しさ、理解してもらう楽しさを実感しました。",
      "lang" => [
        "Pug",
        "Sass",
        "JavaScript"
      ],
      "role" => [
        "企画",
        "アプリコーディング",
      ],
      "link" => [
        [
          "id" => "1",
          "name" => "App",
          "url" => "https://manami-sato.github.io/minicomi/"
        ],
        [
          "id" => "2",
          "name" => "GitHub",
          "url" => "https://github.com/manami-sato/minicomi/"
        ],
      ],
      "headline" => "後輩に教える難しさと楽しさ",
      "chance" => "全3学年合同で行われた2週間の短期制作で「学生が通学時に楽しむ」という決められたテーマのもと企画。スキマ時間にできるような簡単なアルバイトは得られる収入が少ないので、その少なさをマンガ1話分という達成のしやすさに置き換えた。",
      "target" => "コーダー全員のコードをまとめる作業をする必要があり、命名規則やUI部品の配置の仕方など一つ一つルールを決めて一つ一つルールを決めて取り組んだ。",
      "introspection" => "スピードを意識した制作をすることができたが、後輩にうまく教えきれない部分があった。先輩がとってくださったリーダーシップは細かな進捗共有、後輩への気配りなど多くのことを学べたので、次回活用していきたい。",
      "color" => "#06B7EA",
    ],
    [
      "year" => "2",
      "img" => "philosophia",
      "title" => "Philosophia",
      "sort" => [
        "2年前期(ver1)-2年後期",
        "個人制作",
      ],
      "text" => "趣味であるカメラで撮影した自分の写真をまとめたポートフォリオサイトを自主制作で作りました。勉強を兼ねるため普段触らないjQuery、JSONを取り入れました。",
      "lang" => [
        "Vue.js",
        "JSON",
      ],
      "role" => [
        "企画",
        "Webサイトデザイン",
        "Webサイトコーディング",
      ],
      "link" => [
        [
          "id" => "1",
          "name" => "Web site",
          "url" => "https://manami-sato.github.io/philosophia/"
        ],
        [
          "id" => "2",
          "name" => "GitHub",
          "url" => "https://github.com/manami-sato/philosophia/"
        ],
      ],
      "headline" => "新しい言語は楽しい！ゼロからVueを習得",
      "chance" => "Webを学ぶ以前から写真のポートフォリオを持ちたいと思っていたのと、写真撮影という趣味を学習に活かすために制作を開始した。ログが目的だったのでデザインは極力シンプルにした。",
      "target" => "作り始めた2年前期の頃、JSONデータの存在を知ったので、覚えることを目標に制作した。また、作り直した2年後期では、Vueの自主学習を始めていたため作品作りを通して機能を学習した。",
      "introspection" => "",
      "color" => "#666666",
    ],
    [
      "year" => "2",
      "img" => "fribo",
      "title" => "Fribo",
      "catchphrase" => "あなただけのボディーガード！夜道の不安を拭い去れ！",
      "sort" => [
        "2年前期",
        "グループ制作",
      ],
      "text" => "夜道が怖い女性と協議につながる収入源が欲しい格闘家のマッチングサービス。帰り道が一人になりそうで怖いと感じた時、スマホ一つで格闘技団体から選ばれた若手の格闘家が目的地まで送り届けてくれます。女性は不安解消を、選手側は格闘界の好感度と認知の向上につながります。",
      "lang" => [
        "Pug",
        "Sass",
        "JavaScript",
      ],
      "role" => [
        "企画",
        "LP・アプリコーディング",
      ],
      "link" => [
        [
          "id" => "1",
          "name" => "Web site",
          "url" => "https://manami-sato.github.io/fribo/"
        ],
        [
          "id" => "2",
          "name" => "App",
          "url" => "https://manami-sato.github.io/fribo_app/"
        ],
        [
          "id" => "3",
          "name" => "GitHub（Web）",
          "url" => "https://github.com/manami-sato/fribo/"
        ],
        [
          "id" => "4",
          "name" => "GitHub（App）",
          "url" => "https://github.com/manami-sato/fribo_app/"
        ],
      ],
      "headline" => "ログインに関する基礎的な機能を学習",
      "chance" => "授業テーマは「マッチングサービス」。女性が夜道に不安を感じるという現状を踏まえた中で、格闘家のイメージ向上を狙った。仕事ではなくマッチングサービスであるため、「格闘家が無条件に引き受ける」のではなく、「格闘家にも選択権がある」ようにした。",
      "target" => "JavaScriptでの正規表現チェックや、それをクリアした後のフォームの挙動を学習した。",
      "introspection" => "",
      "color" => "#F9A11B",
    ],
    // [
    //   "year" => "2",
    //   "img" => "it19",
    //   "title" => "IT19",
    //   "catchphrase" => "ITでわたしらしい働き方を",
    //   "sort" => [
    //     "2年後期",
    //     "グループ制作",
    //   ],
    //   "text" => "ソフタスバリューコネクト様の新規サービスである「IT19」（読み:アイティージュク）のサービスサイトをグループで制作しました。私たちのグループはターゲットを就職先・再就職先を探している20代女性とし、〈ITでわたしらしい働き方を〉をコンセプトにしています。ITの働きやすさがどう「わたしらしい働き方」に繋がるかをユーザーに体感していただけるようなデザインにしました。",
    //   "lang" => [
    //     "Pug",
    //     "Sass",
    //     "JavaScript",
    //   ],
    //   "role" => [
    //     "企画",
    //     "LPコーディング",
    //   ],
    //   "link" => "it19",
    //   "chance" => "",
    //   "target" => "",
    //   "introspection" => "",
    //   "color" => "",
    // ],
    [
      "year" => "2",
      "img" => "gifcle",
      "title" => "Gifcle",
      "catchphrase" => "#きもちを贈り合うサブスクリプション",
      "sort" => [
        "2年前期",
        "個人制作",
      ],
      "text" => "「誰かに祝って／励まして／寄り添ってほしい！」そんな予定を登録すると、他ユーザーからギフトが届くサブスクリプション。受け取るためには異なるユーザーに同額分のギフトを購る必要がありますが、費用は割引されているため、実質【割引した金額分でお得にギフトを購入】したことになります。“感情の循環”をテーマに、ギフト（gift）のサイクル（cycle）ができるシステムを目指しました。",
      "lang" => [
        "Pug",
        "Sass",
        "JavaScript",
      ],
      "role" => [
        "企画",
        "LP・アプリデザイン",
        "LP・アプリコーディング",
      ],
      "link" => [
        [
          "id" => "1",
          "name" => "Web site",
          "url" => "https://manami-sato.github.io/gifcle/",
        ],
        [
          "id" => "2",
          "name" => "App",
          "url" => "https://manami-sato.github.io/gifcle_app/",
        ],
        [
          "id" => "3",
          "name" => "GitHub（Web）",
          "url" => "https://github.com/manami-sato/gifcle/",
        ],
        [
          "id" => "4",
          "name" => "GitHub（App）",
          "url" => "https://github.com/manami-sato/gifcle_app/",
        ],
        [
          "id" => "5",
          "name" => "コンセプトシート",
          "url" => "https://click.ecc.ac.jp/ecc/msatou/portfolio/document/gifcle.pdf",
        ],
      ],
      "headline" => "Webアプリを学び制作の幅が広がる",
      "chance" => "授業テーマは「繰り返し使うサービス」。初めはお中元やお歳暮などを連想したが、時季関係なく気軽にギフトを贈るという内容に変更。贈ると贈られるがスムーズに機能するようなシステムを目指した。",
      "target" => "PWAを利用したWebアプリ実装。また、JavaScriptではフォームに入力することで先に進める機能を、加えてカレンダーをプラグインなどを使わずに実装した。",
      "introspection" => "新しいテーマを生み出してUXを構築する難しさを体感。デザインやアプリのトップ画面からサービスへのワクワク感があまり得られず、このサービスの本質の楽しさを表現しきれなかった。",
      "color" => "#FFCE00",
    ],
    [
      "year" => "2",
      "img" => "raict",
      "title" => "raict",
      "catchphrase" => "オンラインライブでも意思疎通！",
      "sort" => [
        "2年後期",
        "チーム制作",
      ],
      "text" => "オンラインライブでスマートフォンをペンライトのように振って、アーティストと盛り上がりを共有できるサービス。従来のオンラインライブの「ファンとアーティストの繋がりを感じにくい」点を、「ペンライトを振る」という慣れた動作で解決する、新しい配信プラットフォームです。ライブ視聴中に沢山スマホを振って、ステージに熱量を届けよう！",
      "lang" => [
        "Vue.js",
        "JSON",
      ],
      "role" => [
        "企画",
        "アプリコーディング",
      ],
      "link" => [
        [
          "id" => "1",
          "name" => "App",
          "url" => "https://click.ecc.ac.jp/ecc/msatou/raict_app/",
        ],
        [
          "id" => "2",
          "name" => "Web",
          "url" => "https://click.ecc.ac.jp/ecc/msatou/raict_login/",
        ],
        // [
        //   "id" => "3",
        //   "name" => "Web（LP）",
        //   "url" => "https://click.ecc.ac.jp/ecc/hkusano/raict/",
        // ],
        [
          "id" => "4",
          "name" => "GitHub（App）",
          "url" => "https://github.com/manami-sato/raict_app/",
        ],
        [
          "id" => "5",
          "name" => "GitHub（Web）",
          "url" => "https://github.com/manami-sato/raict_login/",
        ],
        [
          "id" => "6",
          "name" => "コンセプトシート",
          "url" => "https://click.ecc.ac.jp/ecc/msatou/portfolio/document/raict.pdf",
        ],
      ],
      "headline" => "KJ法で洗い出した課題点から解決まで",
      "chance" => "コロナ禍においての課題点というテーマからチームメンバーとKJ法を活用して意見を出し合い、オンラインライブの満足度に着目。オフラインライブと比較し、ペンライトという要素を盛り込むことで満足度向上をはかった。",
      "target" => "Vueを使ってウェブアプリを制作。JSONデータを作成し、propsで動的セグメントを受け渡すことで複雑な動的ルートマッチングを実装した。スワイプでのペンライトの選択など、デザイナーの希望に沿ったコードを書くよう注力した。",
      "introspection" => "",
      "color" => "#AA14F0",
    ],
  ],
  "practice" => [
    [
      "year" => "2",
      "title" => "電子書籍っぽいもの",
      "sort" => "2年",
      "text" => "文章を打ち込むだけで、自動的に行数を割り出して適切なページ数になる本。タップのみの対応なのでSP版に設定すると操作可能になります。",
      "url" => "book"
    ],
    [
      "year" => "2",
      "title" => "スマートフォン端末を振った回数を数値化",
      "sort" => "2年",
      "text" => "数秒おきに端末の加速度を検知、数値に一定以上の幅があると「振った」とカウントされるシステム。iPhoneとMacのSafariを繋げると、console.logに回数が出力。",
      "url" => "shake"
    ],
    [
      "year" => "2",
      "title" => "JSでマウスストーカー／マウスカーソル",
      "sort" => "2年",
      "text" => "マウスを動かすと時間差でついてくるマウスストーカー／マウスカーソル",
      "url" => "mouse"
    ],
    [
      "year" => "2",
      "title" => "文字が一つずつ現れるアニメーション",
      "sort" => "2年",
      "text" => "自動的にspanを挿入して文字が一文字ずつ表示",
      "url" => "split"
    ],
    [
      "year" => "2",
      "title" => "LPにありそうな見出しのアニメーション",
      "sort" => "2年",
      "text" => "時間差で図形→文字が現れるアニメーション",
      "url" => "headlineAnimation"
    ],
    [
      "year" => "2",
      "title" => "iPhone風のボタン",
      "sort" => "2年",
      "text" => "iPhone風のボタンを作成",
      "url" => "button"
    ]
  ],
];

print json_encode($products);

// [
//   "year" => "年",
//   "img" => "画像",
//   "title" => "作品タイトル",
//   "catchphrase" => "キャッチフレーズ",
//   "sort" => [
//     "フィルタ",
//   ],
//   "text" => "説明文",
//   "lang" => [
//     "使用言語",
//   ],
//   "role" => [
//     "企画",
//     "LP・アプリデザイン",
//     "LP・アプリコーディング",
//   ],
//   "link" => [
//     "各種link",
//   ],
//   "headline" => "技術の見出し",
//   "chance" => "問題定義／企画のきっかけ",
//   "target" => "フロントエンドにおける技術目標",
//   "introspection" => "反省と次回に活かすこと",
//   "color" => "",
// ],