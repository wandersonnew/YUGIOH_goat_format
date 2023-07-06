function cardDescription(card_name, id) {
    var _id = '#' + id;
    var card = $.get( "https://db.ygoprodeck.com/api/v7/cardinfo.php",
    { name: card_name } )
    .done(function( data ) {
        var img = $('<img />', {
            id: "dynamic",
            src: data.data[0].card_images[0].image_url,
            width: 257                
        });
        img.appendTo(_id);
    });
}