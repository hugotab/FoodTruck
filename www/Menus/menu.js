var buttons = document.querySelectorAll(".cercle");


var choixMenus = document.querySelectorAll('[id^="choixMenu"]');
// buttons = [
//    0=>cercle.data-type="kebab'
//    1=>cercle.data-type="tacos"
//    2=>cercale.data-type='buckets"  
//]
console.log('buttons',buttons, 'coucou');



for (var i=0; i<buttons.length; i++) {

//    buttons[0] = cercle.data-type='kebab'
    
    buttons[i].addEventListener('click', function () {
        
        //je cache tou le nenus affichés
        for(m=0; m<choixMenus.length; m++){
            console.log('choixMenus', choixMenus[m]);
            choixMenus[m].style.display = 'none';
        }
        
        
        
        
        //this = l'element que j'ai cliqué
        //event clique retourne l'attribut de l'evelement que j'ai cliqué
        var type = this.getAttribute("data-type");
        console.log ("choixMenu" + type);
        //je crée le nom du menu que je veux afficher
        //=>"choixMenu" +  'khebab'
        var choixMenu = "choixMenu" + type;
        
        //elment choixmenukebab = display = block
        document.getElementById(choixMenu).style.display = "block";
    });                                                         
      
}

