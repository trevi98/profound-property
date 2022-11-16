import axios from "axios";

export const apiFront = axios.create({
    baseURL: '/api/v1/'
  });

export const apiBack = axios.create({
    baseURL: '/api/v1/business'
  });

// export default api;
