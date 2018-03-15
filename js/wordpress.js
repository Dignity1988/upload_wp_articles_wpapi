var WPAPI = require( 'wpapi' );
var wp = new WPAPI({ endpoint: 'http://new.whiteraven.org.ua/wp-json' });
var wp = new WPAPI({
    endpoint: 'http://new.whiteraven.org.ua/wp-json',
    // This assumes you are using basic auth, as described further below
    username: 'maksym',
    password: '1234567890'
});
wp.posts().create({
    // "title" and "content" are the only required properties
    title: 'Your Post Title',
    content: 'Your post content',
    // Post will be created as a draft by default if a specific "status"
    // is not specified
    status: 'publish'
}).then(function( response ) {
    // "response" will hold all properties of your newly-created post,
    // including the unique `id` the post was assigned on creation
    console.log( response.id );
})
