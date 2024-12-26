import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Link } from '@inertiajs/react';

export default function Index({ products }) {
    return (
        <AuthenticatedLayout>
            <div className="max-w-7xl mx-auto px-4 py-8">
                <h1 className="text-4xl font-extrabold text-center text-gray-800 mb-12">หนังสือที่น่าสนใจ</h1>

                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                    {products.map((product) => (
                        <div
                            key={product.id}
                            className="relative bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300"
                        >
                            <Link href={`/products/${product.id}`} className="block group">
                                <div className="relative">
                                    <img
                                        src={product.image}
                                        alt={product.name}
                                        className="w-full h-64 object-cover"
                                    />
                                    <div className="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                        <div className="text-center text-white">
                                            <h2 className="text-lg font-semibold">{product.name}</h2>
                                            <p className="text-lg font-bold text-blue-400 mt-2">
                                                {product.price} ฿
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </Link>
                        </div>
                    ))}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
