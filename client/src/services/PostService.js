import Api from './Api';

const getAll = async () => {
    try{
        const posts = await Api().get('/posts');
        return posts.data;
    } catch(err){
        console.log(err);
    }
}

const getByPage = async (page) => {
    try{
        const posts = await Api().get(`/posts?page=${page}`);
        return posts.data;
    } catch(err){
        console.log(err);
    }
}

export default {
    getAll,
    getByPage
}