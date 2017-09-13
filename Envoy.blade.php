@servers(['web' => 'root@119.23.18.36'])

@task('update')
    cd /data/www/kaida.mandokg.com
    git pull origin master
@endtask

@task('composer-update')
    cd /data/www/kaida.mandokg.com
    composer update
@endtask
