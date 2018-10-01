$(document).ready(function() {
    var userFeed = new Instafeed({
        get: 'user',
        userId: '1210990061',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '1210990061.1677ed0.4033592f2a6643c29cac0af64fcc88ef',
        sortBy: 'most-recent',
        template: '<figure><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}"/></a></figure>',
    });
    userFeed.run();
});
