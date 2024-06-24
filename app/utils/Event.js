export class Events {
    /**
     * @param {string} ev - Event that will be listened
     * @param {string} el - Element that will listen to the event
     * @param {() => void} callback - Function that will be executed
     *
     * **/
    static setEvents(ev, el, callback) {
        el.addEventListener(ev, callback);
    }
}
