import Api from './Api';

const getAll = async () => {
    try{
        const posts = await Api().get('/posts');
        return posts.data;
    } catch(err){
        console.log(err);
    }
}

const getByPage = async (page, searchTerm) => {
    try{
        const search = searchTerm ? `&search=${searchTerm}` : ''
        const posts = await Api().get(`/posts?page=${page}${search}`);
        return posts.data;
    } catch(err){
        console.log(err);
    }
}

export default {
    getAll,
    getByPage
}