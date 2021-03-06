<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '杭州凯达卷闸门厂',
                'images' => 'images/4d558bfe28ba94b07928343228314a38.jpg',
                'contact' => '<p>杭州凯达卷闸门厂是一家自主研发电动卷闸门、卷帘门、车库门、型材门、自动伸缩门等设计与生产为一体的专业电动门厂家。杭州凯达卷闸门厂拥有实力雄厚、设备齐全，技术的不断更新使我们日益进步社会各界的需要。在杭州萧山区、拱墅区、上城区、下城区、江干区、余杭区，下沙区均有销售网点。 杭州凯达卷闸门厂有限公司产品选材严格、产品坚固耐用、美观新颖，具有安全可靠、性能稳定、操作方便、开闭灵活、噪音低等主要优点。杭州凯达卷闸门厂生产、安装、维修各种型号电动卷闸门、 电动伸缩门、水晶卷闸门、防火卷闸门、车库卷闸门、不锈钢卷闸门、控防盗电动卷闸门、铝合金卷闸门、快速卷帘门、彩钢卷闸门、水晶门、铁艺门、玻璃感应门、伸缩门、车库门、电动门、自动门、个性化的特种门等系列机电一体化卷闸门伸缩门产品。 杭州凯达卷闸门厂始终坚持以技术为先导，人才为依托，质量为保障，满足超越客户的高标准要求，以赢得了客户的信赖，真诚希望与社会各界新老客户精诚合作。</p>',
                'status' => 1,
                'created_at' => '2017-09-08 10:29:23',
                'updated_at' => '2017-09-08 10:29:23',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '扛风门',
                'images' => 'images/6ea5e6714958cfc0c43a725a9a7d0af9.jpg',
                'contact' => '<p>抗风卷帘是针对我国沿海台风地区、内陆风沙地区专门设计的高强度的扛风们，抗风帘板采用高强度镀锌板一次性冷轧而成的，具有抗台风、防撬、防雨、防潮、隔噪音、防寒、保温、防晒、防风沙等功能；适用于任何建筑领域。</p>',
                'status' => 1,
                'created_at' => '2017-09-08 10:46:48',
                'updated_at' => '2017-09-08 10:46:48',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '消声门',
                'images' => 'images/babfe27eef9fd24d7c5e89f9c017eb6d.jpg',
                'contact' => '<p>外观</p>

<p>消声卷闸门比旧式卷闸门外观新颖，美观大方、色彩任意搭配、坚固耐用、防盗性高、适用于别墅、铺面、厂房等。</p>

<p>噪音</p>

<p>开启、关闭时噪音低，因为门板两侧都安装有特别处理消声带，不会产生高分贝噪音，符合环保要求。</p>',
                'status' => 1,
                'created_at' => '2017-09-08 10:50:30',
                'updated_at' => '2017-09-08 10:50:30',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => '铝型材门',
                'images' => 'images/b6b542cc507f4ec030ce155ec43e3c6b.jpg',
                'contact' => '<p>型材车库门主机引进国外技术，电机设有热保护装置，遥控器高度保密，扛干扰性能好，遥控距离远，门体采用先进的粉末喷涂，色泽艳丽，不易变色，铝合金的强度高出普通型材三倍以上，具有抗风、耐腐、防撬、噪音低等特点，广泛使用于住宅、车库、厂房、店铺等。</p>',
                'status' => 1,
                'created_at' => '2017-09-08 10:55:33',
                'updated_at' => '2017-09-08 10:55:33',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => '水晶门',
                'images' => 'images/fee1c5409be3d927070d4984ee1a8a24.jpg',
                'contact' => '<p>水晶卷帘门又称水晶门，在日本、香港及西欧国家的商街区广泛使用。成为传统卷帘门的最新替代品，以其新颖设计及出众品质倍受设计师及用户的赏识。</p>

<p>水晶门的基材一般采用密度板或刨花板，表层经喷漆处理后，再粘贴一层厚约2-3mm的有机玻璃，使得该门看起来晶莹剔透，故名水晶门。</p>

<p>优点：色泽鲜艳、颜色丰富，易清洗，造型多样，完全适合现代家居装修。</p>

<p>缺点：由于其表面贴有材质为有机玻璃，因此水晶门一般不耐磨，易留下划痕；此外易受热胀冷缩导致变形，表层角面易翘起。</p>',
                'status' => 1,
                'created_at' => '2017-09-08 10:57:35',
                'updated_at' => '2017-09-08 10:57:35',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => '不锈钢拉门',
                'images' => 'images/c21508ce74fa64eeb2ee016ca9bde17f.jpg',
                'contact' => NULL,
                'status' => 1,
                'created_at' => '2017-09-08 10:59:16',
                'updated_at' => '2017-09-08 10:59:16',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => '不锈钢豪华连接门',
                'images' => 'images/a340f33fdd5158099eb12743c274a20a.jpg',
                'contact' => NULL,
                'status' => 1,
                'created_at' => '2017-09-08 11:01:49',
                'updated_at' => '2017-09-08 11:01:49',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => '玻璃门',
                'images' => 'images/825585f4c18e872eb8f1386d413458fd.jpg',
                'contact' => NULL,
                'status' => 1,
                'created_at' => '2017-09-08 11:03:16',
                'updated_at' => '2017-09-08 11:03:16',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => '渔网门',
                'images' => 'images/09403d9576208e540aeeb2036ba7598e.jpg',
                'contact' => NULL,
                'status' => 1,
                'created_at' => '2017-09-08 11:04:42',
                'updated_at' => '2017-09-08 11:04:42',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => '梅花型门',
                'images' => 'images/1866308d1f1f19cb4fe778ac5cdf1d2d.jpg',
                'contact' => NULL,
                'status' => 1,
                'created_at' => '2017-09-08 11:05:34',
                'updated_at' => '2017-09-08 11:05:34',
            ),
        ));
        
        
    }
}