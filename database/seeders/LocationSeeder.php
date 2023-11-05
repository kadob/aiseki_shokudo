<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            [
            'celebrity' =>'菊池桃子',
            'date' =>'2018/01/04',
            'place' =>'青森県田舎館村',
            'overview' => null,
            'key_phrase' =>'焼きそば番組か',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ],
            [
            'celebrity' =>'千原せいじ',
            'date' =>'2018/01/04',
            'place' =>'長崎県五島列島',
            'overview' => null,
            'key_phrase' =>'長崎丸出しの食堂やで',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ],
            [
            'celebrity' =>'かたせ梨乃',
            'date' => '2018/04/08',
            'place' =>'滋賀県近江八幡市沖島',
            'overview' =>'旅人が向かうのは、琵琶湖の中に浮かぶ日本唯一の淡水湖の有人島、沖島だ。ＶＴＲに旅人のかたせ梨乃が映るやいなや、すかさず“待てぃボタン”を押す２人。「違う！大物過ぎる！」「普通、１回目は様子を見るやろ。かたせさんじゃない！」と、大御所の登場に驚きを隠せない。かたせは近江八幡市の港から定期船に乗り、人口およそ３００人の沖島へ渡る。船内で地元の方に教えてもらった港の前にある食堂を訪ねるが、残念ながら、相席したくても人がいない。食堂のお母さんに話を聞くと、島には車がほとんどなく、みんな三輪車を利用しているとか。そこで、お母さんに三輪車を借り、なんと、三輪車で島内を疾走！これには、「相席食堂やろ！ふれあえや！」と、大悟のツッコミが飛ぶ。',
            'key_phrase' => null,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ],
            [
            'celebrity' =>'千原せいじ',
            'date' => '2018/04/15',
            'place' =>'鹿児島県南九州市頴娃',
            'overview' =>'旅人が向かうのは、鹿児島県南九州市の頴娃（えい）駅。駅名が映るやいなや、ノブがボタンを押し、「漢字が妖怪の雰囲気。河童でも住んでるの？」と突っ込むが、続くナレーションで衝撃の事実が明かされる！人口およそ１万人の頴娃町に降り立ったのは、千原せいじ。前回の単発スペシャルにも旅人として登場しているだけに、大悟はすぐさまボタンを押し、「もう、せいじの相席食堂やん！」と、うんざり顔！？　しかもせいじは、目の前に広がるのどか過ぎる景色に、「こんなとこでロケしたって、誰も見いひんで」「ロケ尺が足りへんと思うから、急なカーブから出てくるオレを撮っとき」と、言いたい放題。実際に急なカーブから出てくるせいじを撮影すると、２人は「ガチ交流バラエティーや！」「まだ、ノー交流やから！！」と、ダメ出ししまくる！',
            'key_phrase' =>'頴でえいと読み、娃は読まない',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ],
            [
            'celebrity' =>'具志堅用高',
            'date' =>'2018/04/22',
            'place' =>'大分県豊後高田市昭和の町',
            'overview' =>'旅人が向かうのは大分県の豊後高田市で、美しい田園風景が広がる田染荘や、“日本の夕陽百選”に選ばれた真玉海岸などがある、のどかな景色の広がる街だ。ＶＴＲに旅人の具志堅用高が映るやいなや、すぐさま“待てぃボタン”を押す２人。「１人ロケなんて、できる人じゃない！」「行かしたらアカン！」と、冒頭から心配モード全開！案の定、昭和の趣を残した商店街を散策するも、具志堅の口からは「へえー」「はあー」しか出てこない…。そんな具志堅は、昔ながらのちゃんぽんが美味しい食堂を発見。創業９０年の老舗で、年季の入った店内には福岡からやって来たという家族がちゃんぽんを食べていた。早速、相席をお願いし、ちゃんぽんを食べると、子どもたちが次々と質問をぶつけてくる。「テレビの人なん？」「全部食べるん？」「お金、もっとらんのやろ？」と、なんとも可愛い子どもたち。だが、具志堅はなぜか、まったく子どもたちの質問に答えようとしない。“待てぃボタン”を押した大悟は、「子ども、嫌いなんかな？　子どもからあんなに聞かれることないから！大チャンスや！」と、チャンスをモノにしない具志堅に、さらにイライラを募らせる！？',
            'key_phrase' =>'ガールズバーあります？',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ],
            [
            'celebrity' =>'コロコロチキチキペッパーズ　ナダル',
            'date' =>'2018/04/29',
            'place' =>'石川県珠洲市狼煙町',
            'overview' =>'旅人が向かうのは、石川県の能登半島の最先端に位置する珠洲市。漁業が盛んな町だが、本州で人口が一番少ない市であり、“さいはての地”とも呼ばれている。この街で相席をお願いする旅人のコロコロチキチキペッパーズのナダルが映るやいなや、こちらもすぐさまノブがボタンを押し、「今、若手一の嫌われ者じゃ…」と、ガックリ！？しかも、妙にテンションの高いトーンに、大悟が「ウソ臭いわ！」と、一蹴する。',
            'key_phrase' =>'ちっちゃいな',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ],
            [
            'celebrity' =>'武井壮',
            'date' =>'2018/05/06',
            'place' =>'長野県高山村',
            'overview' =>'旅人が向かうのは長野県の高山村。日本アルプスに抱かれた静かな山里は“健康長寿の里”として知られている。そんな村にやって来たのは、“百獣の王”武井壮。これまでは、旅人の姿が映った途端、そのキャスティングに“待てぃボタン”を押していた千鳥だが、今回は「おー、なるほど」と、まずは一安心する。雪がうっすら残る高山村は気温４度。にもかかわらず、トレードマークのタンクトップ姿で、「ノブさんの倒し方は…」と、元気に話す武井。だが、次のシーンでは、なんと、百獣の王がダウンジャケットを着用していた！すかさず“待てぃボタン”を押し、「早過ぎる！」「東京では見たことのない格好じゃ！」と驚く２人。まずは食堂探し。だが、女性ジョガーを見つけるやいなや、一緒に走り、“相席食堂”ならぬ、“相席ランニング”！？ジョガーおすすめの桜の観光名所「和美の桜」にランニングで案内してもらい、遅咲きの美しいしだれ桜を愛でる。',
            'key_phrase' =>'テレビ離れが加速する',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ],
            [
            'celebrity' =>'横澤夏子',
            'date' =>'2018/05/13',
            'place' =>'東京都八丈島',
            'overview' =>'旅人が向かうのは、東京から南へ３００キロの八丈島。一年中、南国気分が味わえるこの島で相席をお願いする旅人は、新婚ほやほやの横澤夏子。 “待てぃボタン”を押すこともなく、「いいんじゃない？」と、見守る千鳥。早速、食堂を見つけた横澤が入ってみると、八丈島だけに海の幸がいっぱい！トビウオや金目鯛など、店主が自慢の魚を披露するが、残念ながら、相席するお客さんがいない。すると、店主がわざわざお客さんを呼んでくれた。やって来たのは、「バツ２」だという７０歳の味のあるプレイボーイ。お刺身の豪華な舟盛りが来たところで、６０歳の漁師さんも来店。「結婚は３回目」という漁師さんが加わる。',
            'key_phrase' =>'ププッピドゥー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ],
            [
            'celebrity' =>'尼神インター　渚',
            'date' =>'2018/05/20',
            'place' =>'沖縄県うるま市',
            'overview' =>'旅人が向かうのは南国・沖縄。本島の中ほどにあり、“珊瑚の島”という意味をもつうるま市だ。青い空とエメラルドグリーンの海を前に、尼神インターの渚が映るやいなや、すかさず“待てぃボタン”を押す２人。「渚のピンのロケは見たことない。ヤンキーも残ってるし」と、心配する大悟に対し、ノブは「南国なら水着美女でもいいんじゃ」と、残念がる！？渚の相席旅は、本島から延びた約５キロの海中道路の先にある４つの島巡り。まずは、一番端にある伊計島へ。「ビーチ食堂」という名の食堂を見つけて入ってみると、目の前は一面、白い砂浜とキラキラ光るエメラルドグリーンの海！その絶景には渚も「すごいキレイ！」と、一気にテンションが上がる！早速、ビーチで沖縄そばを手に男性と初めての相席成立！男性によれば、「このビーチはあまり海には行かない地元の人たちでも来る」という。絶景のビーチにテンションアゲアゲの渚は、後ろ髪を引かれつつも、次の島へ向かう。',
            'key_phrase' =>'一発15万やから',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ],
            [
            'celebrity' =>'長州力',
            'date' =>'2018/05/27',
            'place' =>'北海道猿払村',
            'overview' =>'旅人が向かったのは北海道の猿払村。日本で一番北にある村で、オホーツク海と広大な草原が広がる北の大地だ。この地で相席をお願いするのは、なんと、長州力！その巨体が見えた途端、“待てぃボタン”を強く押す２人。「この人、１人の時は外国人と一緒よ！」「１人ロケは無理でしょ！」と驚くものの、「ある意味、すごく楽しみ」と、期待も覗かせる。５月までは雪が残る猿払村。気温５度にもかかわらず、半袖姿の長州。地元の方々に教えてもらった「道の駅」を訪ね、食堂で猿払産のそば粉を使ったおそばを注文する。早速、女性の２人組を見つけ、相席をお願いすると、恐る恐る承諾してくれる２人。だが、「これは相席じゃない！怯えてるから！」と突っ込む大悟。案の定、会話が続かず、気まずい空気が流れる…。すると、相席史上初の最悪の事態に発展！千鳥が大爆笑する想定外の事態とは！？',
            'key_phrase' =>'食ってみな飛ぶぞ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ],
            [
            'celebrity' =>'鈴木奈々',
            'date' =>'2018/06/03',
            'place' =>'三重県鳥羽市答志島',
            'overview' =>'ゲストは、「どこ？ここ？とりはね市？」、「今からどこへ行くんだっけ？」と冒頭からおバカキャラ全開の鈴木奈々。彼女の旅先は“とりはね市”ではなく、三重県鳥羽市。ここからフェリーに乗って答志島へ渡る。フェリーの甲板で大股を広げ、風に吹かれる鈴木を見てこの日１発目の“待てぃボタン”を押す大悟。「初めて“オモシロイ”で押した（笑）」と鈴木のロケに期待する。',
            'key_phrase' =>'連続殺人',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ],
            [
            'celebrity' =>'間寛平',
            'date' =>'2018/06/10',
            'place' =>'岡山県備前市日生町',
            'overview' =>'旅人、間寛平が現れると「こりゃ楽しみだ！」と前のめりになる千鳥の２人。VTRの最初の一言は１発ギャグか？あるいはきちんと挨拶か？ワクワク見ていていると想定外のオープニングに度肝を抜かれる。そんな寛平が旅するのは千鳥の故郷・岡山県。牡蠣の産地として知られる備前市日生町をぶらりと歩き、まずは穴子が絶品の店に入ってみる。すると「寛平ちゃん！」と店で食事中のおばさまたちに声をかけられ、さっそく相席成立。地元で評判の穴子料理が出てくるまで、おしゃべりを楽しむ寛平はおしぼりを使って即席ギャグを披露。ここで“待てぃボタン”を押した大悟は、ノブと２人で今見たばかりの師匠の即席ギャグを反復練習（!?）する。続くVTRでいい感じの暖簾に魅かれてトンカツ屋へ、さらにオシャレな外観のカフェへ、気になる店を見つけては躊躇なく入り、「寛平ちゃーん！」、「懐かしい感じがするなァ」など、行く先々でお客や店主から歓迎を受けて相席を重ねていく。',
            'key_phrase' =>'アーメマ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ],
        ]);    
    }
}
