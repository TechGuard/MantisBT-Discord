MantisBT-Discord
==============

A [MantisBT](http://www.mantisbt.org/) plugin to send bug updates to [Discord](https://discordapp.com/) channels.


# Setup

* The `master` branch requires Mantis 2.0.x
* Extract this repo to your *Mantis folder/plugins/Discord*.
* On the Discord side, create a new Webhook (found in *Edit Channel*) and note the URL that Discord generates for you.
* On the MantisBT side, access the plugin's configuration page and fill in your Discord webhook URL.
* You can map your MantisBT projects to other Discord webhooks by setting the *plugin_Discord_url_webhooks* option in Mantis.  Follow the instructions on the plugin's configuration page to get there. Make sure the *plugin_Discord_url_webhooks* configuration option is set to "All Users", with type "complex".
    Example value for this setting:

            array (
              'My First Mantis Project' => 'https://discordapp.com/api/webhooks/xx/xx',
              'My Second Mantis Project' => 'https://discordapp.com/api/webhooks/xx/xx'
            )
* You can specify which bug fields appear in the Discord notifications. Edit the *plugin_Discord_columns* configuration option for this purpose.  Follow the instructions on the plugin configuration page.
* You can map MantisBT usernames to Discord mentions. You can configure it the same way as the other "complex" configurations above.
    Example value for this setting:

            array (
              'My First Mantis Project' => 'https://discordapp.com/api/webhooks/xx/xx',
              'My Second Mantis Project' => 'https://discordapp.com/api/webhooks/xx/xx'
            )

### Locate Discord ID

Before you can find the Discord ID of a user you'll need to enable Developer Mode in Discord. You can find this option here:
> Settings Menu > Appearance > Developer Mode

After you've done that, you can right click on a user and select "Copy ID". This will copy the correct Discord ID to your clipboard.



# Forked

This is a modified version of the [Slack Plugin](https://github.com/infojunkie/MantisBT-Slack) made by [Karim Ratib](https://github.com/infojunkie) 
