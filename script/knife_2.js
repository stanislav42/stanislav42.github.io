$(document).ready(function() {
    $(".catalog__xmark-close").on("click", function() {
        $('body').css('overflow', 'visible');
        $('.modal__catalog-lighbox').css('display', 'none');
    });
});
$(document).ready(function() {
    $(".modal__catalog-close").on("click", function() {
        $('body').css('overflow', 'visible');
        $('.modal__catalog-lighbox').css('display', 'none');
    });
});
$(function() {
    $(".catalog__item").on("click", function() {

        $('body').css('overflow', 'hidden');

        var knife_1 = { k_name: 'Нож ВДВ', k_info: 'сталь 95х18; Черный граб, Мельхиор', t_lenght: '280 мм', b_lenght: '150 мм', h_lenght: '115 мм', thickness_of_the_butt: '3,5 мм', b_width: '30 мм', thickness_of_handle: '10,5 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Чёрный Граб', sheath_material: 'Натуральная кожа', price: '6 800' }
        var knife_2 = { k_name: 'Нож ВМФ', k_info: 'сталь 95х18; Черный граб, Мельхиор', t_lenght: '280 мм', b_lenght: '150 мм', h_lenght: '115 мм', thickness_of_the_butt: '2,5 мм', b_width: '25 мм', thickness_of_handle: '25 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Чёрный Граб', sheath_material: 'Натуральная кожа', price: '6 800' }
        var knife_3 = { k_name: 'Нож разведчика НР-40', k_info: 'сталь 95х18; Черный граб', t_lenght: '280 мм', b_lenght: '155 мм', h_lenght: '125 мм', thickness_of_the_butt: '2,5 мм', b_width: '25 мм', thickness_of_handle: '20 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Чёрный Граб', sheath_material: 'Натуральная кожа', price: '4 900' }
        var knife_4 = { k_name: 'Нож разведчика НР-40', k_info: 'сталь 95х18; Черный граб', t_lenght: '270 мм', b_lenght: '145 мм', h_lenght: '125 мм', thickness_of_the_butt: '2,5 мм', b_width: '20 мм', thickness_of_handle: '20 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Чёрный Граб', sheath_material: 'Натуральная кожа', price: '5 200' }
        var knife_5 = { k_name: 'Нож разведчика НР-40', k_info: 'сталь 95х18; Черный граб', t_lenght: '270 мм', b_lenght: '145 мм', h_lenght: '125 мм', thickness_of_the_butt: '2,5 мм', b_width: '20 мм', thickness_of_handle: '20 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Чёрный Граб', sheath_material: 'Натуральная кожа', price: '5 200' }
        var knife_6 = { k_name: 'Нож разведчика НР-40', k_info: 'сталь кованая D2; рукоять наборная оргстекло, фибра', t_lenght: '270 мм', b_lenght: '145 мм', h_lenght: '125 мм', thickness_of_the_butt: '2,4 мм', b_width: '20 мм', thickness_of_handle: '20 мм', b_steel: 'кованая D2', the_hardness_of_the_handle: '64 HRC', material_of_the_handle: 'оргстекло, фибра', sheath_material: 'Натуральная Кожа', price: '9 200' }
        var knife_7 = { k_name: 'Нож разведчика НР-40', k_info: 'сталь кованая Х12МФ; рукоять черный граб', t_lenght: '280 мм', b_lenght: '155 мм', h_lenght: '125 мм', thickness_of_the_butt: '2,5 мм', b_width: '25 мм', thickness_of_handle: '20 мм', b_steel: 'кованая Х12МФ', the_hardness_of_the_handle: '63 HRC', material_of_the_handle: 'Чёрный граб', sheath_material: 'Натуральная Кожа', price: '8 600' }
        var knife_8 = { k_name: 'Нож разведчика НР-42', k_info: 'сталь кованая 95х18; рукоять черный граб', t_lenght: '280 мм', b_lenght: '160 мм', h_lenght: '120 мм', thickness_of_the_butt: '2,4 мм', b_width: '22 мм', thickness_of_handle: '20 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Чёрный Граб', sheath_material: 'Натуральная Кожа', price: '4 900' }
        var knife_9 = { k_name: 'Нож разведчика НР-43', k_info: 'сталь кованая 95х18; рукоять черный граб', t_lenght: '290 мм', b_lenght: '170 мм', h_lenght: '120 мм', thickness_of_the_butt: '2,5 мм', b_width: '28 мм', thickness_of_handle: '20 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Чёрный Граб', sheath_material: 'Натуральная Кожа', price: '4 900' }
        var knife_10 = { k_name: 'Нож разведчика "НР-43', k_info: 'сталь кованая 95х18; рукоять черный граб', t_lenght: '290 мм', b_lenght: '170 мм', h_lenght: '120 мм', thickness_of_the_butt: '2,5 мм', b_width: '28 мм', thickness_of_handle: '20 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Чёрный Граб', sheath_material: 'Натуральная Кожа', price: '5 700' }
        var knife_11 = { k_name: 'нож разведчика НР-43 "Вишня"', k_info: 'сталь кованая 95Х18 рукоять зеленый граб', t_lenght: '270 мм', b_lenght: '155 мм', h_lenght: '115 мм', thickness_of_the_butt: '2,4 мм', b_width: '18 мм', thickness_of_handle: '25 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Зеленый граб', sheath_material: 'Натуральная кожа', price: '6 100' }
        var knife_12 = { k_name: 'Финка НКВД', k_info: 'сталь кованая 95х18 рукоять ясень, дюраль', t_lenght: '245 мм', b_lenght: '120 мм', h_lenght: '125 мм', thickness_of_the_butt: '4 мм', b_width: '19 мм', thickness_of_handle: '25 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'ясень, дюраль', sheath_material: 'Натуральная кожа', price: '6 800' }
        var knife_13 = { k_name: 'Финка НКВД', k_info: 'сталь х12мф; рукоять черный граб', t_lenght: '270 мм', b_lenght: '130 мм', h_lenght: '140 мм', thickness_of_the_butt: '2,4 мм', b_width: '17 мм', thickness_of_handle: '25 мм', b_steel: 'Дамаск (400 слоев)', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Чёрный Граб', sheath_material: 'Натуральная кожа', price: '8 300' }
        var knife_14 = { k_name: 'Финка НКВД', k_info: 'кованая 95Х18; рукоять черный граб, литье', t_lenght: '260 мм', b_lenght: '130 мм', h_lenght: '130 мм', thickness_of_the_butt: '2,4 мм', b_width: '17 мм', thickness_of_handle: '20 мм', b_steel: 'Дамаск (400 слоев)', the_hardness_of_the_handle: '61 HRC', material_of_the_handle: 'Черный граб резьба по дереву', sheath_material: 'Натуральная Кожа', price: '7 200' }
        var knife_15 = { k_name: 'Финка НКВД', k_info: 'кованая 95Х18; рукоять черный граб, литье', t_lenght: '260 мм', b_lenght: '130 мм', h_lenght: '130 мм', thickness_of_the_butt: '2 мм', b_width: '17 мм', thickness_of_handle: '20 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Чёрный граб', sheath_material: 'Натуральная Кожа', price: '5 050' }
        var knife_16 = { k_name: 'Финка НКВД', k_info: 'кованая 95Х18; рукоять рог лося', t_lenght: '250 мм', b_lenght: '130 мм', h_lenght: '120 мм', thickness_of_the_butt: '2,4 мм', b_width: '17 мм', thickness_of_handle: '25 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Чёрный Граб', sheath_material: 'Натуральная Кожа', price: '6 600' }
        var knife_17 = { k_name: 'Финка НКВД', k_info: 'кованая 95Х18; рукоять черный граб, литье', t_lenght: '270 мм', b_lenght: '130 мм', h_lenght: '140 мм', thickness_of_the_butt: '2,4 мм', b_width: '17 мм', thickness_of_handle: '25 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Чёрный Граб', sheath_material: 'Натуральная Кожа', price: '5 300' }
        var knife_18 = { k_name: 'Финка НКВД', k_info: 'кованая 95Х18; рукоять черный граб, литье', t_lenght: '270 мм', b_lenght: '130 мм', h_lenght: '140 мм', thickness_of_the_butt: '2,4 мм', b_width: '17 мм', thickness_of_handle: '25 мм', b_steel: 'кованая 95Х18', the_hardness_of_the_handle: '57 HRC', material_of_the_handle: 'Чёрный Граб', sheath_material: 'Натуральная Кожа', price: '5 300' }



        var id = $(this).attr("id");
        if (id == "knife_1") {
            document.all.knife_name.innerHTML = (knife_1.k_name);
            document.all.t_length.innerHTML = (knife_1.t_lenght);
            document.all.b_length.innerHTML = (knife_1.b_lenght);
            document.all.h_lenght.innerHTML = (knife_1.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_1.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_1.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_1.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_1.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_1.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_1.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_1.sheath_material);
            document.all.knife_price.innerHTML = (knife_1.price);
            document.all.knife_price.innerHTML = (knife_1.price);
            document.all.modal_lightbox1.style = "display:flex;";

        } else if (id == "knife_2") {
            document.all.knife_name.innerHTML = (knife_2.k_name);
            document.all.t_length.innerHTML = (knife_2.t_lenght);
            document.all.b_length.innerHTML = (knife_2.b_lenght);
            document.all.h_lenght.innerHTML = (knife_2.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_2.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_2.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_2.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_2.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_2.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_2.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_2.sheath_material);
            document.all.knife_price.innerHTML = (knife_2.price);
            document.all.modal_lightbox2.style = "display:flex;";


        } else if (id == "knife_3") {
            document.all.knife_name.innerHTML = (knife_3.k_name);
            document.all.t_length.innerHTML = (knife_3.t_lenght);
            document.all.b_length.innerHTML = (knife_3.b_lenght);
            document.all.h_lenght.innerHTML = (knife_3.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_3.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_3.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_3.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_3.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_3.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_3.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_3.sheath_material);
            document.all.knife_price.innerHTML = (knife_3.price);
            document.all.modal_lightbox3.style = "display:flex;";

        } else if (id == "knife_4") {
            document.all.knife_name.innerHTML = (knife_4.k_name);
            document.all.t_length.innerHTML = (knife_4.t_lenght);
            document.all.b_length.innerHTML = (knife_4.b_lenght);
            document.all.h_lenght.innerHTML = (knife_4.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_4.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_4.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_4.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_4.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_4.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_4.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_4.sheath_material);
            document.all.knife_price.innerHTML = (knife_4.price);
            document.all.modal_lightbox4.style = "display:flex;";
        } else if (id == "knife_5") {
            document.all.knife_name.innerHTML = (knife_5.k_name);
            document.all.t_length.innerHTML = (knife_5.t_lenght);
            document.all.b_length.innerHTML = (knife_5.b_lenght);
            document.all.h_lenght.innerHTML = (knife_5.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_5.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_5.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_5.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_5.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_5.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_5.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_5.sheath_material);
            document.all.knife_price.innerHTML = (knife_5.price);
            document.all.modal_lightbox5.style = "display:flex;";
        } else if (id == "knife_6") {
            document.all.knife_name.innerHTML = (knife_6.k_name);
            document.all.t_length.innerHTML = (knife_6.t_lenght);
            document.all.b_length.innerHTML = (knife_6.b_lenght);
            document.all.h_lenght.innerHTML = (knife_6.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_6.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_6.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_6.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_6.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_6.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_6.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_6.sheath_material);
            document.all.knife_price.innerHTML = (knife_6.price);
            document.all.modal_lightbox6.style = "display:flex;";
        } else if (id == "knife_7") {
            document.all.knife_name.innerHTML = (knife_7.k_name);
            document.all.t_length.innerHTML = (knife_7.t_lenght);
            document.all.b_length.innerHTML = (knife_7.b_lenght);
            document.all.h_lenght.innerHTML = (knife_7.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_7.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_7.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_7.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_7.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_7.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_7.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_7.sheath_material);
            document.all.knife_price.innerHTML = (knife_7.price);
            document.all.modal_lightbox7.style = "display:flex;";
        } else if (id == "knife_8") {
            document.all.knife_name.innerHTML = (knife_8.k_name);
            document.all.t_length.innerHTML = (knife_8.t_lenght);
            document.all.b_length.innerHTML = (knife_8.b_lenght);
            document.all.h_lenght.innerHTML = (knife_8.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_8.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_8.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_8.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_8.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_8.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_8.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_8.sheath_material);
            document.all.knife_price.innerHTML = (knife_8.price);
            document.all.modal_lightbox8.style = "display:flex;";
        } else if (id == "knife_9") {
            document.all.knife_name.innerHTML = (knife_9.k_name);
            document.all.t_length.innerHTML = (knife_9.t_lenght);
            document.all.b_length.innerHTML = (knife_9.b_lenght);
            document.all.h_lenght.innerHTML = (knife_9.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_9.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_9.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_9.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_9.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_9.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_9.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_9.sheath_material);
            document.all.knife_price.innerHTML = (knife_9.price);
            document.all.modal_lightbox9.style = "display:flex;";
        } else if (id == "knife_10") {
            document.all.knife_name.innerHTML = (knife_10.k_name);
            document.all.t_length.innerHTML = (knife_10.t_lenght);
            document.all.b_length.innerHTML = (knife_10.b_lenght);
            document.all.h_lenght.innerHTML = (knife_10.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_10.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_10.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_10.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_10.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_10.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_10.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_10.sheath_material);
            document.all.knife_price.innerHTML = (knife_10.price);
            document.all.modal_lightbox10.style = "display:flex;";
        } else if (id == "knife_11") {
            document.all.knife_name.innerHTML = (knife_11.k_name);
            document.all.t_length.innerHTML = (knife_11.t_lenght);
            document.all.b_length.innerHTML = (knife_11.b_lenght);
            document.all.h_lenght.innerHTML = (knife_11.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_11.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_11.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_11.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_11.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_11.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_11.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_11.sheath_material);
            document.all.knife_price.innerHTML = (knife_11.price);
            document.all.modal_lightbox11.style = "display:flex;";
        } else if (id == "knife_12") {
            document.all.knife_name.innerHTML = (knife_12.k_name);
            document.all.t_length.innerHTML = (knife_12.t_lenght);
            document.all.b_length.innerHTML = (knife_12.b_lenght);
            document.all.h_lenght.innerHTML = (knife_12.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_12.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_12.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_12.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_12.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_12.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_12.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_12.sheath_material);
            document.all.knife_price.innerHTML = (knife_12.price);
            document.all.modal_lightbox12.style = "display:flex;";
        } else if (id == "knife_13") {
            document.all.knife_name.innerHTML = (knife_13.k_name);
            document.all.t_length.innerHTML = (knife_13.t_lenght);
            document.all.b_length.innerHTML = (knife_13.b_lenght);
            document.all.h_lenght.innerHTML = (knife_13.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_13.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_13.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_13.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_13.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_13.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_13.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_13.sheath_material);
            document.all.knife_price.innerHTML = (knife_13.price);
            document.all.modal_lightbox13.style = "display:flex;";
        } else if (id == "knife_14") {
            document.all.knife_name.innerHTML = (knife_14.k_name);
            document.all.t_length.innerHTML = (knife_14.t_lenght);
            document.all.b_length.innerHTML = (knife_14.b_lenght);
            document.all.h_lenght.innerHTML = (knife_14.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_14.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_14.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_14.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_14.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_14.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_14.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_14.sheath_material);
            document.all.knife_price.innerHTML = (knife_14.price);
            document.all.modal_lightbox14.style = "display:flex;";
        } else if (id == "knife_15") {
            document.all.knife_name.innerHTML = (knife_15.k_name);
            document.all.t_length.innerHTML = (knife_15.t_lenght);
            document.all.b_length.innerHTML = (knife_15.b_lenght);
            document.all.h_lenght.innerHTML = (knife_15.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_15.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_15.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_15.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_15.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_15.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_15.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_15.sheath_material);
            document.all.knife_price.innerHTML = (knife_15.price);
            document.all.modal_lightbox15.style = "display:flex;";
        } else if (id == "knife_16") {
            document.all.knife_name.innerHTML = (knife_16.k_name);
            document.all.t_length.innerHTML = (knife_16.t_lenght);
            document.all.b_length.innerHTML = (knife_16.b_lenght);
            document.all.h_lenght.innerHTML = (knife_16.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_16.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_16.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_16.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_16.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_16.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_16.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_16.sheath_material);
            document.all.knife_price.innerHTML = (knife_16.price);
            document.all.modal_lightbox16.style = "display:flex;";
        } else if (id == "knife_17") {
            document.all.knife_name.innerHTML = (knife_17.k_name);
            document.all.t_length.innerHTML = (knife_17.t_lenght);
            document.all.b_length.innerHTML = (knife_17.b_lenght);
            document.all.h_lenght.innerHTML = (knife_17.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_17.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_17.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_17.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_17.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_17.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_17.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_17.sheath_material);
            document.all.knife_price.innerHTML = (knife_17.price);
            document.all.modal_lightbox17.style = "display:flex;";
        } else if (id == "knife_18") {
            document.all.knife_name.innerHTML = (knife_18.k_name);
            document.all.t_length.innerHTML = (knife_18.t_lenght);
            document.all.b_length.innerHTML = (knife_18.b_lenght);
            document.all.h_lenght.innerHTML = (knife_18.h_lenght);
            document.all.thickness_of_the_butt.innerHTML = (knife_18.thickness_of_the_butt);
            document.all.b_width.innerHTML = (knife_18.b_width);
            document.all.thickness_of_handle.innerHTML = (knife_18.thickness_of_handle);
            document.all.b_steel.innerHTML = (knife_18.b_steel);
            document.all.the_hardness_of_the_handle.innerHTML = (knife_18.the_hardness_of_the_handle);
            document.all.material_of_the_handle.innerHTML = (knife_18.material_of_the_handle);
            document.all.sheath_material.innerHTML = (knife_18.sheath_material);
            document.all.knife_price.innerHTML = (knife_18.price);
            document.all.modal_lightbox18.style = "display:flex;";
        }
    });
});


$(document).ready(function() {
    $(".modal__lightbox-prew").on("click", function() {
        $('.w-lightbox-image').src = "http://uploads.webflow.com/5ad451ddd8ce0273007d0513/5ad700c1f2b8b5fec67c80e2_close.png";
    });
});