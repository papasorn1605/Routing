import { Link } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

export default function Show({ product }) {
    return (
        <AuthenticatedLayout>
            <div className="max-w-2xl mx-auto p-8 bg-white shadow-lg rounded-lg mt-8">
                <div className="flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-8">
                    <img
                        src={product.image}
                        alt={product.name}
                        className="w-full md:w-1/2 h-auto object-cover rounded-lg shadow-lg"
                    />
                    <div className="flex-1 text-center md:text-left">
                        <h1 className="text-3xl font-semibold text-gray-800">{product.name}</h1>
                        <p className="mt-3 text-base text-gray-600">{product.description}</p>
                        <p className="mt-4 text-xl font-semibold text-blue-600">{product.price} Baht</p>
                        <div className="mt-4 text-center">
                            <Link
                                href="/products"
                                className="px-6 py-2 text-base font-medium text-white bg-gradient-to-r from-indigo-500 to-blue-500 rounded-lg hover:from-indigo-600 hover:to-blue-600 transition"
                            >
                                Back to All Products
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
