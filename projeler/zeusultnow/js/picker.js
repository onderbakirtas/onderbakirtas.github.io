$(document).ready(function() {
    
    var gameInfo = 'https://api.opendota.com/api/matches/2896643129';
    var heroList = 'https://raw.githubusercontent.com/kronusme/dota2-api/master/data/heroes.json';
    var activeHeroes = [];
    
    $.getJSON(gameInfo, function(data) {
        data.players.forEach(function(player) {
            activeHeroes.push(player.hero_id);
        });
    });
    
    console.log(activeHeroes);
    
    var followHero  = $("#followHero");
    var heroPicker  = $("#heroPicker");
    var matchId     = $("#matchId");
    var cache       = {};
    var action      = false;
    
    /* heroPicker.hide();
    
    followHero.on("click", function() {
        heroPicker.slideToggle(200);
    }); */
    
    $("#heroName").on("keyup", function(event){
        
        var find = $("#heroName").val()
        
        if ($("#heroName").val().length > 0)
        {
        
            if (find in cache)
            {
                results = cache[find];
            }
            else
            {
                var results = $.grep(activeHeroes, function(item) {
                return item.search(RegExp(find, "i")) != -1;
                });

                cache[find] = results;
            }   

                if (action == false)
                {
                    $("#heroName").after('<ul id="heroDropdown"></ul>');

                    action = true;

                    $("#heroDropdown").on("click", "li", function() {
                        $("#heroName").val($(this).text());
                        $("#heroDropdown").empty();
                    });
                }
                else
                {
                    $("#heroDropdown").empty();
                }

            for (term in results)
            {
                $("#heroDropdown").append("<li>" + results[term] + "</li>");
            }
        }
        else if(action)
        {
            $("#heroDropdown").empty();
        }
    });
});

































