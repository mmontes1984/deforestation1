export class LocalStorage {
    static set(key, payload) {
        localStorage.setItem(key, JSON.stringify(payload));
    }

    static get(key) {
        const data = localStorage.getItem(key);

        if (!data) return null;

        return JSON.parse(data);
    }
}
