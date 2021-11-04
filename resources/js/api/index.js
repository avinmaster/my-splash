import modules from './modules'

export default new Proxy({}, {
    get(target, name) {
        if (modules[name] !== undefined) {
            return modules[name];
        }
        console.error('Module with name ' + name + ' not found');
    }
});
