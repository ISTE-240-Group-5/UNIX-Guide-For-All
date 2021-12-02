const dir = ["Documents/", "Downloads/", "Desktop/", ".config/", ".local/", ".zshrc", "zshrc.conf"];
$('body').terminal({
    //Begin `ls` function------------------------------------------------------------------------------------------------
    ls: function(m1){
        if(arguments.length !== 0){
            switch(arguments[0]){
                case '-a':
                    let apRint = "";
                        for(let i = 0; i < dir.length; i++){
                            let temp = dir[i];

                            apRint = apRint + "  " + temp;
                        }
                    this.echo(apRint);
                break;
                case '-l':
                    let bpRint = "";
                        for(let i = 0; i < dir.length; i++){
                            let temp = dir[i];

                            let pattern = /^\W/g; // regex expresion to see if the first char of a string is not a letter 

                            let result = temp.match(pattern);   // check if its a dot file or just contains a dot '.' (tbh this just sees if the first char is a '.')
                            if(!result){
                                bpRint = bpRint + "drwxr-xr-x 3 julianm julianm 4096 Nov 16 18:41 " + temp + "\n";
                            }
                        }
                    this.echo(bpRint);
                break;
                case '--help':
                    this.echo('Usage: ls [OPTION]... [FILE]...' + '\n' +
                            'List information about the FILEs (the current directory by default).' +  '\n' +
                            '\n' +
                            'Mandatory arguments to long options are mandatory for short options too.' + '\n' +
                            '-a, --all                  do not ignore entries starting with .' + '\n' +
                            '-l                         use a long listing format');
                break;
                case ' ':
                    let defpRint = "";
                        for(let i = 0; i < dir.length; i++){
                            let temp = dir[i];
                            
                            let pattern = /^\W/g; // regex expresion to see if the first char of a string is not a letter 

                            let result = temp.match(pattern);   // check if its a dot file or just contains a dot '.' (tbh this just sees if the first char is a '.')
                            if(!result){
                                defpRint = defpRint + "  " + temp;
                            }
                        }
                    this.echo(defpRint);
                break;
                default:
                    this.echo('ls: cannot access ' + m1 + ': No such file or directory');
            }
        }
    },
    //End `ls` function------------------------------------------------------------------------------------------------
}, {
    greetings:"~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" + '\n' +
              "|    __   ____                               _                           _                _____ _      _____  __    |" + '\n' +
              "|   / /  / __ \\                             | |                         (_)              / ____| |    |_   _| \\ \\   |" + '\n' +
              "|  / /  | |  | |_   _  __ _ ___  __ _ _ __  | |     ___  __ _ _ __ _ __  _ _ __   __ _  | |    | |      | |    \\ \\  |" + '\n' +
              "| < <   | |  | | | | |/ _` / __|/ _` | '__| | |    / _ \\/ _` | '__| '_ \\| | '_ \\ / _` | | |    | |      | |     > > |" + '\n' +
              "|  \\ \\  | |__| | |_| | (_| \\__ \\ (_| | |    | |___|  __/ (_| | |  | | | | | | | | (_| | | |____| |____ _| |_   / /  |" + '\n' +
              "|   \\_\\  \\___\\_\\\\__,_|\\__,_|___/\\__,_|_|    |______\\___|\\__,_|_|  |_| |_|_|_| |_|\\__, |  \\_____|______|_____| /_/   |" + '\n' +
              "|                                                                                 __/ |                             |" +  '\n' +
              "|                                                                                |___/                              |" +  '\n' +
              "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" + '\n'
              
});