$(document).ready(function() {
    var userFeed = new Instafeed({
        get: 'user',
        userId: '8149600105',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '8149600105.1677ed0.9d6d3214da524f178f6d27f75ac02720',
        sortBy: 'most-recent',
        template: '<figure><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}"/></a></figure>',
    });
    userFeed.run();
});
