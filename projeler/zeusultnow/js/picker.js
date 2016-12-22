$(document).ready(function() {
    
    var heroList = [ "Abaddon",
                     "Alchemist",
                     "Anti-Mage",
                     "Ancient Apparition",
                     "Arc Warden",
                     "Axe",
                     "Bane",
                     "Batrider",
                     "Beastmaster",
                     "Bloodseeker",
                     "Bounty Hunter",
                     "Brewmaster",
                     "Bristleback",
                     "Broodmother",
                     "Centaur Warrunner",
                     "Chaos Knight",
                     "Chen",
                     "Clinkz",
                     "Clockwerk",
                     "Crystal Maiden",
                     "Dark Seer",
                     "Dazzle",
                     "Death Prophet",
                     "Disruptor",
                     "Doom",
                     "Dragon Knight",
                     "Drow Ranger",
                     "Earth Spirit",
                     "Earthshaker",
                     "Elder Titan",
                     "Ember Spirit",
                     "Enchantress",
                     "Enigma",
                     "Faceless Void",
                     "Gyrocopter",
                     "Huskar",
                     "Invoker",
                     "Io",
                     "Jakiro",
                     "Juggernaut",
                     "Keeper of the Light",
                     "Kunkka",
                     "Legion Commander",
                     "Leshrac",
                     "Lich",
                     "Lifestealer",
                     "Lina",
                     "Lion",
                     "Lone Druid",
                     "Luna",
                     "Lycan",
                     "Magnus",
                     "Medusa",
                     "Meepo",
                     "Mirana",
                     "Monkey King",
                     "Morphling",
                     "Naga Siren",
                     "Nature's Prophet",
                     "Necrophos",
                     "Night Stalker",
                     "Nyx Assassin",
                     "Ogre Magi",
                     "Omniknight",
                     "Oracle",
                     "Outworld Devourer",
                     "Phantom Assassin",
                     "Phantom Lancer",
                     "Phoenix",
                     "Puck",
                     "Pudge",
                     "Pugna",
                     "Queen of Pain",
                     "Razor",
                     "Riki",
                     "Rubick",
                     "Sand King",
                     "Shadow Demon",
                     "Shadow Fiend",
                     "Shadow Shaman",
                     "Silencer",
                     "Skywrath Mage",
                     "Slardar",
                     "Slark",
                     "Sniper",
                     "Spectre",
                     "Spirit Breaker",
                     "Storm Spirit",
                     "Sven",
                     "Techies",
                     "Templar Assassin",
                     "Terrorblade",
                     "Tidehunter",
                     "Timbersaw",
                     "Tinker",
                     "Tiny",
                     "Treant Protector",
                     "Troll Warlord",
                     "Tusk",
                     "Underlord",
                     "Undying",
                     "Ursa",
                     "Vengeful Spirit",
                     "Venomancer",
                     "Viper",
                     "Visage",
                     "Warlock",
                     "Weaver",
                     "Windranger",
                     "Winter Wyvern",
                     "Witch Doctor",
                     "Wraith King",
                     "Zeus"
                   ];
    
    var followHero  = $("#followHero");
    var heroPicker  = $("#heroPicker");
    var matchId     = $("#matchId");
    var cache       = {};
    var action      = false;
    
    heroPicker.hide();
    
    followHero.on("click", function() {
        heroPicker.slideToggle(200);
    });
    
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
                var results = $.grep(heroList, function(item) {
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

































