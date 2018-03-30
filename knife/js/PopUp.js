$(function(){
$(".bbb").on("click", function()
{

var knife_1 ={k_name:'Пластун',k_info:'сталь 95х18; рукоять граб',t_lenght: '329 мм',b_lenght: '190 мм',h_lenght: '139 мм',thickness_of_the_butt: '3,5 мм',b_width: '30 мм',thickness_of_handle: '10,5 мм',b_steel: 'кованая 95Х18',the_hardness_of_the_handle: '57 HRC',material_of_the_handle: 'Граб',sheath_material: 'Натуральная кожа',price: '6800'}
var knife_2 ={k_name:'Пластун',k_info:'сталь алмазка; рукоять венге',t_lenght: '315 мм',b_lenght: '180 мм',h_lenght: '135 мм',thickness_of_the_butt: '3,5 мм',b_width: '30 мм',thickness_of_handle: '20 мм',b_steel: 'Алмазка ХВ-5',the_hardness_of_the_handle: '65 HRC',material_of_the_handle: 'Венге',sheath_material: 'Натуральная кожа',price: '8500'}
var knife_3 ={k_name:'Пластун',k_info:'сталь дамаск; рукоять граб',t_lenght: '329 мм',b_lenght: '190 мм',h_lenght: '139 мм',thickness_of_the_butt: '3,5 мм',b_width: '30 мм',thickness_of_handle: '10,5 мм',b_steel: 'дамаск (400 слоев)',the_hardness_of_the_handle: '61 HRC',material_of_the_handle: 'Граб',sheath_material: 'Натуральная кожа',price: '9700'}
var knife_4 ={k_name:'Пластун',k_info:'сталь кованая D2; рукоять оргстекло, фибра',t_lenght: '315 мм',b_lenght: '180 мм',h_lenght: '135 мм',thickness_of_the_butt: '3,5 мм',b_width: '30 мм',thickness_of_handle: '20 мм',b_steel: 'кованая D2',the_hardness_of_the_handle: '63 HRC',material_of_the_handle: 'Оргстекло,фибра',sheath_material: 'Натуральная кожа',price: '10400'}
var knife_5 ={k_name:'Пластун',k_info:'сталь х12мф; рукоять черный граб',t_lenght: '329 мм',b_lenght: '190 мм',h_lenght: '139 мм',thickness_of_the_butt: '3,5 мм',b_width: '30 мм',thickness_of_handle: '10,5 мм',b_steel: 'Х12МФ',the_hardness_of_the_handle: '62 HRC',material_of_the_handle: 'Чёрный Граб',sheath_material: 'Натуральная кожа',price: '8100'}
var knife_6 ={k_name:'Пластунский-2',k_info:'сталь Дамаск; рукоять черный граб, литье',t_lenght: '345 мм',b_lenght: '215 мм',h_lenght: '130 мм',thickness_of_the_butt: '4 мм',b_width: '26 мм',thickness_of_handle: '30 мм',b_steel: 'Дамаск (400 слоев)',the_hardness_of_the_handle: '61 HRC',material_of_the_handle: 'Черный граб резьба по дереву',sheath_material: 'Деревянные ножны, литье латунь',price: '15300'}
var knife_7 ={k_name:'Пластун',k_info:'сталь Алмазка; рукоять черный граб, литье',t_lenght: '345 мм',b_lenght: '215 мм',h_lenght: '130 мм',thickness_of_the_butt: '4 мм',b_width: '26 мм',thickness_of_handle: '35 мм',b_steel: 'Алмазка ХВ-5',the_hardness_of_the_handle: '65 HRC',material_of_the_handle: 'Чёрный граб',sheath_material: 'Деревянные ножны, литье латунь',price: '14700'}
var knife_8 ={k_name:'Пластун',k_info:'сталь Дамаск; рукоять черный граб, литье',t_lenght: '345 мм',b_lenght: '215 мм',h_lenght: '130 мм',thickness_of_the_butt: '4 мм',b_width: '26 мм',thickness_of_handle: '35 мм',b_steel: 'Дамаск (400 слоев)',the_hardness_of_the_handle: '61 HRC',material_of_the_handle: 'Чёрный Граб',sheath_material: 'Деревянные ножны, литье латунь',price: '14200'}
var knife_9 ={k_name:'Пластун',k_info:'сталь Х12МФ; рукоять черный граб, литье',t_lenght: '350 мм',b_lenght: '215 мм',h_lenght: '135 мм',thickness_of_the_butt: '4 мм',b_width: '25 мм',thickness_of_handle: '32 мм',b_steel: 'спецсталь Х12МФ',the_hardness_of_the_handle: '62 HRC',material_of_the_handle: 'Чёрный Граб',sheath_material: 'Деревянные ножны, литье латунь',price: '11700'}
var knife_10 ={k_name:'Пластун',k_info:'сталь Х12МФ; рукоять черный граб, литье',t_lenght: '345 мм',b_lenght: '215 мм',h_lenght: '130 мм',thickness_of_the_butt: '4 мм',b_width: '26 мм',thickness_of_handle: '35 мм',b_steel: 'спецсталь Х12МФ',the_hardness_of_the_handle: '62 HRC',material_of_the_handle: 'Чёрный Граб',sheath_material: 'Деревянные ножны, литье латунь',price: '10500'}




var id = $(this).attr("id");
if (id=="b_1")
{		
 document.all.knife_name.innerHTML=(knife_1.k_name);
 document.all.knife_info.innerHTML=(knife_1.k_info);
 document.all.total_length.innerHTML=(knife_1.t_lenght);
 document.all.blade_length.innerHTML=(knife_1.b_lenght);
 document.all.handle_length.innerHTML=(knife_1.h_lenght);
 document.all.thickness_of_the_butt.innerHTML=(knife_1.thickness_of_the_butt);
 document.all.blade_width.innerHTML=(knife_1.b_width);
 document.all.thickness_of_handle.innerHTML=(knife_1.thickness_of_handle);
 document.all.steel_blade.innerHTML=(knife_1.b_steel);
 document.all.the_hardness_of_the_handle.innerHTML=(knife_1.the_hardness_of_the_handle);
 document.all.material_of_the_handle.innerHTML=(knife_1.material_of_the_handle);
 document.all.sheath_material.innerHTML=(knife_1.sheath_material);
 document.all.price.innerHTML=(knife_1.price);
 
 document.all.sale.style="display:block";
  document.all.hit.style="display:none";

 document.all.mainimage.src="img/jpeg/knifes/knife1/knife1.jpg";
 document.all.image1.src="img/jpeg/knifes/knife1/knife1.jpg";
 document.all.image2.src="img/jpeg/knifes/knife1/knife2.jpg";
 document.all.image3.src="img/jpeg/knifes/knife1/knife3.jpg";
}
else if (id=="b_2")
{
 document.all.knife_name.innerHTML=(knife_2.k_name);
 document.all.knife_info.innerHTML=(knife_2.k_info);
 document.all.total_length.innerHTML=(knife_2.t_lenght);
 document.all.blade_length.innerHTML=(knife_2.b_lenght);
 document.all.handle_length.innerHTML=(knife_2.h_lenght);
 document.all.thickness_of_the_butt.innerHTML=(knife_2.thickness_of_the_butt);
 document.all.blade_width.innerHTML=(knife_2.b_width);
 document.all.thickness_of_handle.innerHTML=(knife_2.thickness_of_handle);
 document.all.steel_blade.innerHTML=(knife_2.b_steel);
 document.all.the_hardness_of_the_handle.innerHTML=(knife_2.the_hardness_of_the_handle);
 document.all.material_of_the_handle.innerHTML=(knife_2.material_of_the_handle);
 document.all.sheath_material.innerHTML=(knife_2.sheath_material);
  document.all.price.innerHTML=(knife_2.price);
 
 document.all.sale.style="display:none";
  document.all.hit.style="display:none";
 
 document.all.mainimage.src="img/jpeg/knifes/knife2/knife1.jpg";
 document.all.image1.src="img/jpeg/knifes/knife2/knife1.jpg";
 document.all.image2.src="img/jpeg/knifes/knife2/knife2.jpg";
 document.all.image3.src="img/jpeg/knifes/knife2/knife3.jpg";
}
else if (id=="b_3")
{
 document.all.knife_name.innerHTML=(knife_3.k_name);
 document.all.knife_info.innerHTML=(knife_3.k_info);
 document.all.total_length.innerHTML=(knife_3.t_lenght);
 document.all.blade_length.innerHTML=(knife_3.b_lenght);
 document.all.handle_length.innerHTML=(knife_3.h_lenght);
 document.all.thickness_of_the_butt.innerHTML=(knife_3.thickness_of_the_butt);
 document.all.blade_width.innerHTML=(knife_3.b_width);
 document.all.thickness_of_handle.innerHTML=(knife_3.thickness_of_handle);
 document.all.steel_blade.innerHTML=(knife_3.b_steel);
 document.all.the_hardness_of_the_handle.innerHTML=(knife_3.the_hardness_of_the_handle);
 document.all.material_of_the_handle.innerHTML=(knife_3.material_of_the_handle);
 document.all.sheath_material.innerHTML=(knife_3.sheath_material);
  document.all.price.innerHTML=(knife_3.price);

   document.all.sale.style="display:none";
  document.all.hit.style="display:none";
 
 document.all.mainimage.src="img/jpeg/knifes/knife3/knife1.jpg";
 document.all.image1.src="img/jpeg/knifes/knife3/knife1.jpg";
 document.all.image2.src="img/jpeg/knifes/knife3/knife2.jpg";
 document.all.image3.src="img/jpeg/knifes/knife3/knife3.jpg";
}
else if (id=="b_4")
{
 document.all.knife_name.innerHTML=(knife_4.k_name);
 document.all.knife_info.innerHTML=(knife_4.k_info);
 document.all.total_length.innerHTML=(knife_4.t_lenght);
 document.all.blade_length.innerHTML=(knife_4.b_lenght);
 document.all.handle_length.innerHTML=(knife_4.h_lenght);
 document.all.thickness_of_the_butt.innerHTML=(knife_4.thickness_of_the_butt);
 document.all.blade_width.innerHTML=(knife_4.b_width);
 document.all.thickness_of_handle.innerHTML=(knife_4.thickness_of_handle);
 document.all.steel_blade.innerHTML=(knife_4.b_steel);
 document.all.the_hardness_of_the_handle.innerHTML=(knife_4.the_hardness_of_the_handle);
 document.all.material_of_the_handle.innerHTML=(knife_4.material_of_the_handle);
 document.all.sheath_material.innerHTML=(knife_4.sheath_material);
  document.all.price.innerHTML=(knife_4.price);

     document.all.sale.style="display:none";
  document.all.hit.style="display:none";
 
 document.all.mainimage.src="img/jpeg/knifes/knife4/knife1.jpg";
 document.all.image1.src="img/jpeg/knifes/knife4/knife1.jpg";
 document.all.image2.src="img/jpeg/knifes/knife4/knife2.jpg";
 document.all.image3.src="img/jpeg/knifes/knife4/knife3.jpg";
}
else if (id=="b_5")
{
 document.all.knife_name.innerHTML=(knife_5.k_name);
 document.all.knife_info.innerHTML=(knife_5.k_info);
 document.all.total_length.innerHTML=(knife_5.t_lenght);
 document.all.blade_length.innerHTML=(knife_5.b_lenght);
 document.all.handle_length.innerHTML=(knife_5.h_lenght);
 document.all.thickness_of_the_butt.innerHTML=(knife_5.thickness_of_the_butt);
 document.all.blade_width.innerHTML=(knife_5.b_width);
 document.all.thickness_of_handle.innerHTML=(knife_5.thickness_of_handle);
 document.all.steel_blade.innerHTML=(knife_5.b_steel);
 document.all.the_hardness_of_the_handle.innerHTML=(knife_5.the_hardness_of_the_handle);
 document.all.material_of_the_handle.innerHTML=(knife_5.material_of_the_handle);
 document.all.sheath_material.innerHTML=(knife_5.sheath_material);
  document.all.price.innerHTML=(knife_5.price);

     document.all.sale.style="display:none";
  document.all.hit.style="display:inline";
 
 document.all.mainimage.src="img/jpeg/knifes/knife5/knife1.jpg";
 document.all.image1.src="img/jpeg/knifes/knife5/knife1.jpg";
 document.all.image2.src="img/jpeg/knifes/knife5/knife2.jpg";
 document.all.image3.src="img/jpeg/knifes/knife5/knife3.jpg";
}
else if (id=="b_6")
{
 document.all.knife_name.innerHTML=(knife_6.k_name);
 document.all.knife_info.innerHTML=(knife_6.k_info);
 document.all.total_length.innerHTML=(knife_6.t_lenght);
 document.all.blade_length.innerHTML=(knife_6.b_lenght);
 document.all.handle_length.innerHTML=(knife_6.h_lenght);
 document.all.thickness_of_the_butt.innerHTML=(knife_6.thickness_of_the_butt);
 document.all.blade_width.innerHTML=(knife_6.b_width);
 document.all.thickness_of_handle.innerHTML=(knife_6.thickness_of_handle);
 document.all.steel_blade.innerHTML=(knife_6.b_steel);
 document.all.the_hardness_of_the_handle.innerHTML=(knife_6.the_hardness_of_the_handle);
 document.all.material_of_the_handle.innerHTML=(knife_6.material_of_the_handle);
 document.all.sheath_material.innerHTML=(knife_6.sheath_material);
  document.all.price.innerHTML=(knife_6.price);

     document.all.sale.style="display:none";
  document.all.hit.style="display:none";
 
 document.all.mainimage.src="img/jpeg/knifes/knife6/knife1.jpg";
 document.all.image1.src="img/jpeg/knifes/knife6/knife1.jpg";
 document.all.image2.src="img/jpeg/knifes/knife6/knife2.jpg";
 document.all.image3.src="img/jpeg/knifes/knife6/knife3.jpg";
}
else if (id=="b_7")
{
 document.all.knife_name.innerHTML=(knife_7.k_name);
 document.all.knife_info.innerHTML=(knife_7.k_info);
 document.all.total_length.innerHTML=(knife_7.t_lenght);
 document.all.blade_length.innerHTML=(knife_7.b_lenght);
 document.all.handle_length.innerHTML=(knife_7.h_lenght);
 document.all.thickness_of_the_butt.innerHTML=(knife_7.thickness_of_the_butt);
 document.all.blade_width.innerHTML=(knife_7.b_width);
 document.all.thickness_of_handle.innerHTML=(knife_7.thickness_of_handle);
 document.all.steel_blade.innerHTML=(knife_7.b_steel);
 document.all.the_hardness_of_the_handle.innerHTML=(knife_7.the_hardness_of_the_handle);
 document.all.material_of_the_handle.innerHTML=(knife_7.material_of_the_handle);
 document.all.sheath_material.innerHTML=(knife_7.sheath_material);
  document.all.price.innerHTML=(knife_7.price);

     document.all.sale.style="display:none";
  document.all.hit.style="display:none";
 
 document.all.mainimage.src="img/jpeg/knifes/knife7/knife1.jpg";
 document.all.image1.src="img/jpeg/knifes/knife7/knife1.jpg";
 document.all.image2.src="img/jpeg/knifes/knife7/knife2.jpg";
 document.all.image3.src="img/jpeg/knifes/knife7/knife3.jpg";
}
else if (id=="b_8")
{
 document.all.knife_name.innerHTML=(knife_8.k_name);
 document.all.knife_info.innerHTML=(knife_8.k_info);
 document.all.total_length.innerHTML=(knife_8.t_lenght);
 document.all.blade_length.innerHTML=(knife_8.b_lenght);
 document.all.handle_length.innerHTML=(knife_8.h_lenght);
 document.all.thickness_of_the_butt.innerHTML=(knife_8.thickness_of_the_butt);
 document.all.blade_width.innerHTML=(knife_8.b_width);
 document.all.thickness_of_handle.innerHTML=(knife_8.thickness_of_handle);
 document.all.steel_blade.innerHTML=(knife_8.b_steel);
 document.all.the_hardness_of_the_handle.innerHTML=(knife_8.the_hardness_of_the_handle);
 document.all.material_of_the_handle.innerHTML=(knife_8.material_of_the_handle);
 document.all.sheath_material.innerHTML=(knife_8.sheath_material);
  document.all.price.innerHTML=(knife_8.price);
 
   document.all.sale.style="display:none";
  document.all.hit.style="display:none";

 document.all.mainimage.src="img/jpeg/knifes/knife8/knife1.jpg";
 document.all.image1.src="img/jpeg/knifes/knife8/knife1.jpg";
 document.all.image2.src="img/jpeg/knifes/knife8/knife2.jpg";
 document.all.image3.src="img/jpeg/knifes/knife8/knife3.jpg";
}
else if (id=="b_9")
{
 document.all.knife_name.innerHTML=(knife_9.k_name);
 document.all.knife_info.innerHTML=(knife_9.k_info);
 document.all.total_length.innerHTML=(knife_9.t_lenght);
 document.all.blade_length.innerHTML=(knife_9.b_lenght);
 document.all.handle_length.innerHTML=(knife_9.h_lenght);
 document.all.thickness_of_the_butt.innerHTML=(knife_9.thickness_of_the_butt);
 document.all.blade_width.innerHTML=(knife_9.b_width);
 document.all.thickness_of_handle.innerHTML=(knife_9.thickness_of_handle);
 document.all.steel_blade.innerHTML=(knife_9.b_steel);
 document.all.the_hardness_of_the_handle.innerHTML=(knife_9.the_hardness_of_the_handle);
 document.all.material_of_the_handle.innerHTML=(knife_9.material_of_the_handle);
 document.all.sheath_material.innerHTML=(knife_9.sheath_material);
 document.all.price.innerHTML=(knife_9.price);

    document.all.sale.style="display:inline";
  document.all.hit.style="display:none";
 
 document.all.mainimage.src="img/jpeg/knifes/knife9/knife1.jpg";
 document.all.image1.src="img/jpeg/knifes/knife9/knife1.jpg";
 document.all.image2.src="img/jpeg/knifes/knife9/knife2.jpg";
 document.all.image3.src="img/jpeg/knifes/knife9/knife3.jpg";
}

else if (id=="b_10")
{
 document.all.knife_name.innerHTML=(knife_10.k_name);
 document.all.knife_info.innerHTML=(knife_10.k_info);
 document.all.total_length.innerHTML=(knife_10.t_lenght);
 document.all.blade_length.innerHTML=(knife_10.b_lenght);
 document.all.handle_length.innerHTML=(knife_10.h_lenght);
 document.all.thickness_of_the_butt.innerHTML=(knife_10.thickness_of_the_butt);
 document.all.blade_width.innerHTML=(knife_10.b_width);
 document.all.thickness_of_handle.innerHTML=(knife_10.thickness_of_handle);
 document.all.steel_blade.innerHTML=(knife_10.b_steel);
 document.all.the_hardness_of_the_handle.innerHTML=(knife_10.the_hardness_of_the_handle);
 document.all.material_of_the_handle.innerHTML=(knife_10.material_of_the_handle);
 document.all.sheath_material.innerHTML=(knife_10.sheath_material);
 document.all.price.innerHTML=(knife_10.price);

   document.all.sale.style="display:none";
  document.all.hit.style="display:none";
 
 document.all.mainimage.src="img/jpeg/knifes/knife10/knife1.jpg";
 document.all.image1.src="img/jpeg/knifes/knife10/knife1.jpg";
 document.all.image2.src="img/jpeg/knifes/knife10/knife2.jpg";
 document.all.image3.src="img/jpeg/knifes/knife10/knife3.jpg";
}

});
});


$(document).ready(function(){ PopUpHide();});
function PopUpShow(){  $("#popup1").show();}
function PopUpHide(){  $("#popup1").hide();}


function carousel1(){ document.all.mainimage.src = document.all.image1.src;}
function carousel2(){ document.all.mainimage.src = document.all.image2.src;}
function carousel3(){ document.all.mainimage.src = document.all.image3.src;}