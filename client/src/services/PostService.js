import Api from './Api';

const getAll = async () => {
    try{
        const posts = await Api().get('/posts');
        return posts.data.data;
    } catch(err){
        console.log(err);
    }
}

export default {
    getAll
}