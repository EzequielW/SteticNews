import axios from 'axios';
const development = process.env.NODE_ENV !== 'production'

export default () => {
    return axios.create({
        baseURL: development ? 'http://localhost:8000/api/v1' : ''
    })
}