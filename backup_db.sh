
backup_dir=`pwd`/`date "+%s"`
echo $backup_dir
innobackupex --user=root --password=5kywatch123 $backup_dir

