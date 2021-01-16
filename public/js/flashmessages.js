var flashMsgId = 0;
class flash {
   
    //Text to add in the div prepared for flashmessages
    static gethtml(message, level) {
        flashMsgId++;
        return `<div id="flashmsg_${flashMsgId}"class="alert alert-${level} alert-dismissible fade show" role="alert"><strong>${message}</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>`;
    }
    //Set time out after wich the message will disapers
    static setMsgTimeout(id, time) {
        window.setTimeout(function () {
            $(`#flashmsg_${id}`).fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, time);
    }
    //Replace all messages
    static send(message, level) {
        $('#flashmessages').html(this.gethtml(message, level));
        this.setMsgTimeout(flashMsgId,3000);
    }
    //Add a message
    static add(message, level) {
        $('#flashmessages').append(this.gethtml(message, level));
        this.setMsgTimeout(flashMsgId, 3000);
    }
    //Clear the messages part
    static remove() {
        $('#flashmessages').html("");
    }

}

