$('#random').click(function () {
    $.ajax({
        url: '/random',
        success: function (response) {
            var response = JSON.parse(response);
            if (response.statusCode === 200) {
                $('#quoteText').text(response.quote.quoteText);
                $('#quoteAuthor').text(response.quote.quoteAuthor);
                $('#quoteGenre').text(response.quote.quoteGenre ?? 'Not genre');
            }
        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
});