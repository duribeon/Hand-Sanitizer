/**
 * Created by ryeubi in KETI on 2015-08-31.
 */

//exports.timer = new process.EventEmitter();

var events=require('events');
exports.timer =new events(); 




setInterval(function() {
    exports.timer.emit('tick');
}, 1000);
